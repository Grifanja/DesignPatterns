<?php


namespace App\Controller;

use App\Services\DesignPatterns\Fundamental\Deligation\AppMessenger;
use App\Services\DesignPatterns\Fundamental\Deligation\DelegationJob;
use App\Services\DesignPatterns\Fundamental\EventChannel\EventChannelJob;
use App\Services\DesignPatterns\Fundamental\PropertyContainer\BlogPost;
use App\Services\DesignPatterns\Fundamental\PropertyContainer\PropertyContainerJob;
use App\Services\DesignPatterns\Fundamental\PropertyContainer\PropertyContainer;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DPController extends AbstractController
{

    private $main_tpl = 'dp/main.html.twig';

    private function getMenu(): array
    {
        return [
            'Behavioral' => [
                'Strategy'
            ],
            'Creational' => [
                'AbstractFactory',
                'FactoryMethod',
                'SimpleFactory',
                'StaticFactory',

            ],
            'Fundamental' => [
                'Deligation',
                'EventChannel',
                'PropertyContainer',
                'Interface'
            ],

        ];
    }

    /**
     * @param string $name
     * @param string $desc
     * @return array
     */
    private function getMainData(string $name,string $desc): array
    {
        return ['menu' => $this->getMenu(), 'name' => $name, 'desc' => $desc];
    }

    /**
     * @return Response
     *
     * @Route("/")
     *
     */
    public function main()
    {
        $data = $this->getMainData("Паттерны",'С лева представлено меню с паттернами');
        return $this->render($this->main_tpl,$data);
    }

    /**
     * @Route("/Fundamental/PropertyContainer")
     */
    public function PropertyContainer()
    {
        PropertyContainerJob::run();
        $data = $this->getMainData("Контейнер свойств",PropertyContainerJob::getDescription());
        return $this->render($this->main_tpl,$data);
    }

    /**
     * @Route("/Fundamental/Deligation")
     */
    public function Deligation()
    {
        DelegationJob::run();
        $data = $this->getMainData("Делегирование (Delrgation)",DelegationJob::getDescription());
        return $this->render($this->main_tpl,$data);

    }

    /**
     * @Route("/Fundamental/EventChannel")
     */
    public function EventChannel()
    {
        EventChannelJob::run();
        $data = $this->getMainData("Канал событий (Event Channel)",EventChannelJob::getDescription());
        return $this->render($this->main_tpl,$data);
    }

    /**
     * @Route("/Fundamental/Interfaca")
     */
    public function Interfaca()
    {
        EventChannelJob::run();
        $data = $this->getMainData("Интерфейс (Interfaca)",EventChannelJob::getDescription());
        return $this->render($this->main_tpl,$data);
    }
}