<?php
require_once 'controllers/HomeController.php';

$uri =trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

switch ($uri) {
    case '':
    case 'home':
        require 'views/index.view.php';
        $controller = new HomeController();
        $controller->index();
        break;
}