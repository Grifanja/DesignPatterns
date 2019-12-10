<?php


namespace App\Services\DesignPatterns\Creational\StaticFactory\Interfaces;


use App\Services\DesignPatterns\Fundamental\Deligation\MessengerInterface;

interface MessengerStaticFactoryInterface
{
    /**
     * @param string $tupe
     * @return MessengerInterface
     */
    public static function build(string $type = 'email'): MessengerInterface;

}