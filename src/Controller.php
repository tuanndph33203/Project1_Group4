<?php

namespace Group4\BaseMvc;

class Controller {
    protected function render($view, $data = []) {
        extract($data);
        include "Views/$view.php";
    }
}