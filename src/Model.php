<?php

namespace Group4\BaseMvc;

class Model
{
    protected $conn;
    protected $table;
    protected $columns;

    public function __construct()
    {
        try {
            $host = DB_HOST;
            $dbname = DB_DATABASE;
            $username = DB_USERNAME;
            $password = DB_PASSWORD;

            $this->conn = new \PDO("mysql:host=$host;dbname=$dbname", $username, $password);

            // set the PDO error mode to exception
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }

    public function findOne($column, $id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE $column = :id LIMIT 1";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetch();
    }

    public function all($column)
    {
        $sql = "SELECT * FROM `{$this->table}` ORDER BY {$column} DESC";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
    public function paginate($page = 1, $perPage = 10)
    {
        $sql = "SELECT * FROM {$this->table} LIMIT {$perPage} OFFSET (({$page} - 1) * {$perPage})";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
    public function getAll($columns, $where, $groupByColumn)
    {
        $joinStatements = [];

        foreach ($columns as $table => $columnArr) {
            $joinStatements[] = "INNER JOIN `{$table}` ON `{$this->table}`.`{$table}_id` = `{$table}`.`{$table}_id`";
        }

        $whereConditions = [];

        if (!empty($where)) {
            foreach ($where as $column => $value) {
                if (is_array($value)) {
                    $whereInConditions = [];
                    foreach ($value as $index => $item) {
                        $placeholder = "{$column}_{$index}";
                        $whereInConditions[] = ":{$placeholder}";
                    }
                    $whereInCondition = implode(' OR ', $whereInConditions);
                    $whereConditions[] = "({$whereInCondition})";
                } else {
                    $placeholder = "{$column}";
                    $whereConditions[] = "`{$this->table}`.`{$column}` = :{$placeholder}";
                }
            }
        }

        $sql = "SELECT * FROM `{$this->table}`
    " . implode(' ', $joinStatements);

        if (!empty($whereConditions)) {
            $sql .= " WHERE " . implode(' AND ', $whereConditions);
        }

        $sql .= " GROUP BY `{$this->table}`.`{$groupByColumn}`";

        $stmt = $this->conn->prepare($sql);

        foreach ($where as $column => $value) {
            if (is_array($value)) {
                foreach ($value as $index => $item) {
                    $placeholder = "{$column}_{$index}";
                    $stmt->bindValue(":{$placeholder}", $item);
                }
            } else {
                $placeholder = "{$column}";
                $stmt->bindValue(":{$placeholder}", $value);
            }
        }

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

    public function insert($data)
    {
        $sql = "INSERT INTO `{$this->table}`";

        $columns = implode(", ", $this->columns);
        $sql .= "({$columns}) VALUES ";

        $values = [];
        foreach ($this->columns as $column) {
            $values[] = ":{$column}";
        }
        $values = implode(", ", $values);
        $sql .= "({$values})";

        $stmt = $this->conn->prepare($sql);

        foreach ($data as $key => &$value) {
            if (in_array($key, $this->columns)) {
                $stmt->bindParam(":{$key}", $value);
            }
        }

        $stmt->execute();
        $id = $this->conn->lastInsertId();
        return $id;
    }
    public function update($data, $conditions = [])
    {
        $sql = "UPDATE {$this->table} SET ";

        $sets = [];
        foreach ($this->columns as $column) {
            $sets[] = "{$column} = :{$column}";
        }
        $sets = implode(", ", $sets);
        $sql .= "{$sets}";

        $where = [];
        foreach ($conditions as $condition) {
            $link = $condition[3] ?? '';
            $where[] = "{$condition[0]} {$condition[1]} :w{$condition[0]} {$link}";
        }
        $where = implode(" ", $where);
        $sql .= " WHERE {$where}";

        $stmt = $this->conn->prepare($sql);

        foreach ($data as $key => &$value) {
            if (in_array($key, $this->columns)) {
                $stmt->bindParam(":{$key}", $value);
            }
        }

        foreach ($conditions as &$condition) {
            $stmt->bindParam(":w{$condition[0]}", $condition[2]);
        }

        $stmt->execute();
    }

    public function delete($conditions = [])
    {
        $sql = "DELETE FROM {$this->table} WHERE ";

        $where = [];
        foreach ($conditions as $condition) {
            $link = $condition[3] ?? '';
            $where[] = "{$condition[0]} {$condition[1]} :w{$condition[0]} {$link}";
        }
        $where = implode(" ", $where);
        $sql .= "{$where}";

        $stmt = $this->conn->prepare($sql);

        foreach ($conditions as &$condition) {
            $stmt->bindParam(":w{$condition[0]}", $condition[2]);
        }

        $stmt->execute();
    }
    public function count()
    {
        $sql = "SELECT {$this->table}.{$this->table}_name, COUNT(*) AS total_column
                FROM product INNER JOIN {$this->table}
                ON product.{$this->table}_id = {$this->table}.{$this->table}_id
                GROUP BY {$this->table}.{$this->table}_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function __destruct()
    {
        $this->conn = null;
    }
}
