<?php

namespace Phpcourse\Myproject\Classes\Rendering;


//use Monolog\Level;
//use Monolog\Logger;
//use Monolog\Handler\StreamHandler;
//use Monolog\Handler\FirePHPHandler;

use Phpcourse\Myproject\Classes\Traits\DebugTrait;
use Latte;
class Rendering {
    use DebugTrait;

    public function __construct(array $data) {

        self::debugConsole('Rendering');

        $latte = new Latte\Engine;

        $latte->setTempDirectory('templates/default/temp');
        $latte->render('templates/default/index.tpl', $data);

//        $log = new Logger('my_logger');
//        $log->pushHandler(new StreamHandler('logs/mono.log', Level::Debug));
//        $log->pushHandler(new FirePHPHandler());
//        $log->warning('My logger is not ready');
//        $log->info('My logger is ready');
    }
}
