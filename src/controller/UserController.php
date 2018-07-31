<?php

namespace Acme\Controller;

class UserController
{
    protected $className;

    public function __construct()
    {
        $classPath = explode('\\', self::class);
        $this->className = $classPath[sizeof($classPath) - 1];
    }

    public function index()
    {
        return $this->className . ' ' . __FUNCTION__;
    }
}
