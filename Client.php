<?php

require __DIR__.'/vendor/autoload.php';
use Singleton\Singleton;

class Client
{
    public function getObject()
    {
        $singleton = Singleton::getSingleton('Hola mundo');
        print($singleton->getString().PHP_EOL);
    }

    public function test($params)
    {
        print_r($params);
        echo PHP_EOL;
    }

}

$app = new Client;

$app->getObject();