<?php


namespace App\Services\DesignPatterns\Fundamental\EventChannel;


class EventChannel implements EventChannelInterface
{
    /**
     * @var array
     */
    private $topics = [];

    /**
     * Издатель уведомляет канал о том что надо всех кто
     * подписан на тему $topic уведомить данными $data
     *
     * @param string $topic
     * @param string $data
     * @return EventChannel
     */
    public function publish(string $topic, string $data): EventChannel
    {
        foreach ($this->topics[$topic] ?? [] as $subscriber){
            $subscriber->notify($data);
        }
        return $this;
    }

    /**
     * Подпищик $subscriber подписывается на событие $topic
     *
     * @param string $topic
     * @param SubscriberInterface $subscriber
     * @return EventChannel
     */
    public function subscribe(string $topic, SubscriberInterface $subscriber): EventChannel
    {
        $this->topics[$topic][] = $subscriber;
        dump("{$subscriber->getName()} подписался на {$topic}");
        return $this;
    }

}