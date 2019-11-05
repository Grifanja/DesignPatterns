<?php


namespace App\Services\DesignPatterns\Fundamental\EventChannel;


class Publisher implements PublisherInterface
{
    /**
     * @var string
     */
    private $topic;

    /**
     * @var EventChannelInterface
     */
    private $eventChannel;


    /**
     * Publisher constructor.
     * @param string $topic
     * @param EventChannelInterface $eventChannel
     */
    public function __construct(string $topic, EventChannelInterface $eventChannel)
    {
        $this->topic = $topic;
        $this->eventChannel = $eventChannel;
    }


    /**
     * Уведомление подпищиков
     *
     * @param string $data
     * Данные которыми уведоляется подпищик
     *
     * @return mixed
     */
    public function publish(string $data)
    {
        $this->eventChannel->publish($this->topic, $data);
    }
}