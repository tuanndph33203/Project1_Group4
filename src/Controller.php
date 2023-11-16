<?php

namespace Group4\BaseMvc;

class Controller {
    protected function renderAdmin($view, $data = []) {
        extract($data);
        include "Views/admin/$view.php";
    }
    protected function renderClient($view, $data = []) {
        extract($data);
        include "Views/client/components/header/header.php";
        include "Views/client/$view.php";
        include "Views/client/components/footer/footer.php";
    }
}