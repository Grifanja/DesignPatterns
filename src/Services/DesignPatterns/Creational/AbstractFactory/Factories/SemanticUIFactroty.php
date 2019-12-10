<?php


namespace App\Services\DesignPatterns\Creational\AbstractFactory\Factories;


use App\Services\DesignPatterns\Creational\AbstractFactory\Classes\ButtonSemanticUI;
use App\Services\DesignPatterns\Creational\AbstractFactory\Classes\CheckBoxSemanticUI;
use App\Services\DesignPatterns\Creational\AbstractFactory\Interfaces\ButtonInterface;
use App\Services\DesignPatterns\Creational\AbstractFactory\Interfaces\CheckBoxInterface;
use App\Services\DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class SemanticUIFactroty implements GuiFactoryInterface
{

    /**
     * @return ButtonInterface
     */
    public function buildButton(): ButtonInterface
    {
        return new ButtonSemanticUI();
    }

    /**
     * @return CheckBoxInterface
     */
    public function buildCheckBox(): CheckBoxInterface
    {
        return new CheckBoxSemanticUI();
    }
}