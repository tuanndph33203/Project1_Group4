<?php
session_start();
require 'vendor/autoload.php';
require 'routes.php';

$uri = $_SERVER['REQUEST_URI'];

$router->dispatch($uri);