<?php


namespace App\Services\DesignPatterns\Creational\AbstractFactory;


use App\Services\DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class GuiKidFactory
{
    public function getFactory($type):GuiFactoryInterface
    {
        return new $type();
    }

}