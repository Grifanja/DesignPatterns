<?php


namespace App\Services\DesignPatterns\Creational\AbstractFactory;


use App\Services\DesignPatterns\Creational\AbstractFactory\Factories\BootstrapFactory;
use App\Services\DesignPatterns\Creational\AbstractFactory\Factories\SemanticUIFactroty;
use App\Services\DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class AbstractFactory
{
    /**
     * @var GuiFactoryInterface
     */
    private $guiKit;

    public function __construct($type)
    {
        $this->guiKit = (new GuiKidFactory())->getFactory($type);
    }

    /**
     * @return GuiFactoryInterface
     */
    public function getGuiKit(): GuiFactoryInterface
    {
        return $this->guiKit;
    }


    public static function run()
    {
        //BootstrapFactory::class
        $af = new self(BootstrapFactory::class);
        $af->getGuiKit()->buildButton()->draw();
        $af->getGuiKit()->buildCheckBox()->draw();
        $af = new self(SemanticUIFactroty::class);
        $af->getGuiKit()->buildButton()->draw();
        $af->getGuiKit()->buildCheckBox()->draw();

    }



}