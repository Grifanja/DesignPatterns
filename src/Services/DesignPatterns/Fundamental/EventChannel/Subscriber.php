<?php


namespace App\Services\DesignPatterns\Fundamental\EventChannel;


class Subscriber implements SubscriberInterface
{


    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Уведомление подпищика
     *
     * @param $data
     * @return mixed
     */
    public function notify($data)
    {
        dump("{$this->getName()}  оповешен данными [{$data}]");
    }

    /**
     * @return string
     */
    public function getName(): string
    {
       return $this->name;
    }
}