<?php


namespace App\Services\DesignPatterns\Creational\SimpleFactory\Interfaces;


use App\Services\DesignPatterns\Fundamental\Deligation\MessengerInterface;

interface MessengerSimpleFactoryInterface
{
    /**
     * @param string $type
     * @return MessengerInterface
     */
    public function build(string $type): MessengerInterface;

}