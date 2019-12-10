<?php


namespace App\Services\DesignPatterns\Creational\FactoryMethod;


use App\Services\DesignPatterns\Creational\FactoryMethod\Classes\Forms\BootstrapDialogForm;
use App\Services\DesignPatterns\Creational\FactoryMethod\Classes\Forms\SemanticUiDialogForm;

class FactoryMethod
{

    public static function run()
    {

        $dialogForm = new BootstrapDialogForm();
        $dialogForm->render();
        $dialogForm = new SemanticUiDialogForm();
        $dialogForm->render();

    }

}