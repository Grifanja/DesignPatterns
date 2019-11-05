<?php


namespace App\Services\DesignPatterns\Creational\FactoryMethod\Classes\Forms;


use App\Services\DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;
use App\Services\DesignPatterns\Creational\FactoryMethod\Interfaces\FormInterface;


abstract class AbstractForm implements FormInterface
{

    /**
     * Рисуем форму
     */
    public function render()
    {
        $guiKid = $this->creatGuiKit();
        $result[] = $guiKid->buildCheckBox()->draw();
        $result[] = $guiKid->buildButton()->draw();
    }


    /**
     * получаем инструментарий для рисования объектов формы
     *
     * @return GuiFactoryInterface
     */
    abstract function creatGuiKit(): GuiFactoryInterface;
}