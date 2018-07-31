<?php

namespace Acme;

use Acme\Controller\UserController;

$uri = $_SERVER['REQUEST_URI'];
$params = null;

if (strpos($_SERVER['REQUEST_URI'], '?')) {
    $uri = explode('?', $_SERVER['REQUEST_URI'])[0];
    $params = $_GET;
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if ($uri == '/') {
        echo (new UserController($params))->index();
        return;
    }

    if ($uri == '/user') {
        echo (new UserController($params))->index();
        return;
    }
}
