<?php

namespace Group4\BaseMvc\Controllers\Admin;

use Group4\BaseMvc\Controller;
use Group4\BaseMvc\Models\User;

class StatisticalController extends Controller
{
    public function index() {
        $this->renderAdmin('statistical/statistical');
    }
}
