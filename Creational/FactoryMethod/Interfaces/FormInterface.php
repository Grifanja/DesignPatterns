<?php


namespace App\Services\DesignPatterns\Creational\FactoryMethod\Interfaces;


use App\Services\DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

interface FormInterface
{

    /**
     * получаем инструментарий для рисования объектов формы
     *
     * @return GuiFactoryInterface
     */
    public function creatGuiKit(): GuiFactoryInterface;

}