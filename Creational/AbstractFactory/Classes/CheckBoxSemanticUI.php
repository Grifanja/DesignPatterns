<?php


namespace App\Services\DesignPatterns\Creational\AbstractFactory\Classes;


use App\Services\DesignPatterns\Creational\AbstractFactory\Interfaces\CheckBoxInterface;

class CheckBoxSemanticUI implements CheckBoxInterface
{

    public function draw()
    {
       dump(__CLASS__);
    }
}