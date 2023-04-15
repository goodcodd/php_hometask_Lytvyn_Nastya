<?php

namespace Phpcourse\Myproject\Classes\Controllers;
use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;
class NewsController implements ControllerMethodName
{

    public function index(): void
    {
        $news = [
            ["title" => "Новина 1",
                "text" => "Скоро вже буде Пасха",
                "date" => "2023-04-13"
            ],
            ["title" => "Новина 2",
                "text" => "Так шо заказуйте м'яско",
                "date" => "2023-04-14"
            ],
            ["title" => "Новина 3",
                "text" => "Сердельки та ковбаску",
                "date" => "2023-04-15"
            ]
        ];
        $data = ['news' => $news, 'page' => 'news'];
        new Rendering($data);
    }
}