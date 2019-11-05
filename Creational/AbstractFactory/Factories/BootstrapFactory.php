<?php


namespace App\Services\DesignPatterns\Creational\AbstractFactory\Factories;


use App\Services\DesignPatterns\Creational\AbstractFactory\Classes\ButtonBootstrap;
use App\Services\DesignPatterns\Creational\AbstractFactory\Classes\CheckBoxBootstrap;
use App\Services\DesignPatterns\Creational\AbstractFactory\Interfaces\ButtonInterface;
use App\Services\DesignPatterns\Creational\AbstractFactory\Interfaces\CheckBoxInterface;
use App\Services\DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class BootstrapFactory implements GuiFactoryInterface
{

    /**
     * @return ButtonInterface
     */
    public function buildButton(): ButtonInterface
    {
       return new ButtonBootstrap();
    }

    /**
     * @return CheckBoxInterface
     */
    public function buildCheckBox(): CheckBoxInterface
    {
        return new CheckBoxBootstrap();
    }
}