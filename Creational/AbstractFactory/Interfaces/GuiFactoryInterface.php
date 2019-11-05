<?php


namespace App\Services\DesignPatterns\Creational\AbstractFactory\Interfaces;


interface GuiFactoryInterface
{

    /**
     * @return ButtonInterface
     */
    public function buildButton(): ButtonInterface;

    /**
     * @return CheckBoxInterface
     */
    public function buildCheckBox(): CheckBoxInterface;

}