<?php


namespace App\Services\DesignPatterns\Fundamental\EventChannel;

/**
 * Interface SubscriberInterface
 * @package App\Services\DesignPatterns\Fundamental\EventChannel
 */
interface SubscriberInterface
{

    /**
     * Уведомление подпищика
     *
     * @param $data
     * @return mixed
     */
    public function notify($data);

    /**
     * @return string
     */
    public function getName(): string;

}