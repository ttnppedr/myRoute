<?php

namespace Acme\Tests;

use PHPUnit\Framework\TestCase;
use Acme\Controller\UserController;

class UserControllerTest extends TestCase
{
	public function testUserControllerIndexAction()
	{
		$controller = new UserController();
		$this->assertEquals(
			'UserController index',
			$controller->index()
		);
	}

    public function testUserControllerIndexActionWithParams()
    {
        $params = [
            'name' => 'a',
        ];

        $controller = new UserController($params);
        $this->assertEquals(
            'UserController index name=a',
            $controller->index()
        );
    }
}
