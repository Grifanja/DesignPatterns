<?php


namespace App\Services\DesignPatterns\Creational\AbstractFactory\Classes;




use App\Services\DesignPatterns\Creational\AbstractFactory\Interfaces\ButtonInterface;

class ButtonSemanticUI implements ButtonInterface
{

    public function draw()
    {
        dump(__CLASS__);
    }
}