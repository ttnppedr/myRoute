<?php

namespace Acme\Controller;

class UserController
{
    protected $className;
    protected $params;

    public function __construct($params = [])
    {
        $classPath = explode('\\', self::class);
        $this->className = $classPath[sizeof($classPath) - 1];

        $this->params = $params;
    }

    public function index()
    {
        $result = $this->className . ' ' . __FUNCTION__;
        if (count($this->params)) {
            $result .= ' ' . http_build_query($this->params);
        }
        return $result;
    }
}
