<?php


namespace App\Services\DesignPatterns\Creational\FactoryMethod\Classes\Forms;


use App\Services\DesignPatterns\Creational\AbstractFactory\Factories\SemanticUIFactroty;
use App\Services\DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class SemanticUiDialogForm extends AbstractForm
{

    /**
     * получаем инструментарий для рисования объектов формы
     *
     * @return GuiFactoryInterface
     */
    function creatGuiKit(): GuiFactoryInterface
    {
       return new SemanticUIFactroty();
    }
}