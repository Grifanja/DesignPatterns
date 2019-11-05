<?php

namespace App\Services\DesignPatterns\Creational\SimpleFactory;

use App\Services\DesignPatterns\Creational\SimpleFactory\Classes\MessengerSimpleFactory;

class SimpleFactory
{
    public static function run(): void
    {

        dump(MessengerSimpleFactory::build('email'));
        dump(MessengerSimpleFactory::build('sms'));

    }

}