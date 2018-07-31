<?php

namespace Acme;

use Acme\Controller\UserController;

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if ($_SERVER['REQUEST_URI'] == '/') {
        echo (new UserController())->index();
        return;
    }

    if ($_SERVER['REQUEST_URI'] == '/user') {
        echo (new UserController())->index();
        return;
    }
}
