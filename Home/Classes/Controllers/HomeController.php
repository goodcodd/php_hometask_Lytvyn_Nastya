<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;
use Phpcourse\Myproject\Classes\Traits\DebugTrait;


class HomeController implements ControllerMethodName
{
    use DebugTrait;
    public function index() : void{

        $data = ['title' => 'Home', 'content' => 'main_pages/home', 'message' => ':^)'];
        self::debugConsole('HomeController:'. $data['title']);
        new Rendering($data);
    }
}
