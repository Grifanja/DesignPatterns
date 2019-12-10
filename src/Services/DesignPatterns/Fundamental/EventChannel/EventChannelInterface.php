<?php


namespace App\Services\DesignPatterns\Fundamental\EventChannel;


interface EventChannelInterface
{

    /**
     * Издатель уведомляет канал о том что надо всех кто
     * подписан на тему $topic уведомить данными $data
     *
     * @param string $topic
     * @param string $data
     * @return EventChannel
     */
    public function publish(string $topic, string $data): EventChannel;

    /**
     * Подпищик $subscriber подписывается на событие $topic
     *
     * @param string $topic
     * @param SubscriberInterface $subscriber
     * @return EventChannel
     */
    public function subscribe(string $topic, SubscriberInterface $subscriber): EventChannel;




}