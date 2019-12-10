<?php


namespace App\Services\DesignPatterns\Creational\FactoryMethod\Classes\Forms;


use App\Services\DesignPatterns\Creational\AbstractFactory\Factories\BootstrapFactory;
use App\Services\DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class BootstrapDialogForm extends AbstractForm
{

    /**
     * получаем инструментарий для рисования объектов формы
     *
     * @return GuiFactoryInterface
     */
    function creatGuiKit(): GuiFactoryInterface
    {
       return new BootstrapFactory();
    }
}