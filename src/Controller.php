<?php

namespace Group4\BaseMvc;

class Controller {
    protected function renderAdmin($view, $data = []) {
        $data['view'] = $view;
        extract($data);
        include "Views/admin/master.php";
    }
    protected function renderClient($view, $data = []) {
        $data['view'] = $view;

        extract($data);
        include "Views/client/master.php";
    }
}