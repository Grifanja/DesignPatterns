<?php


namespace App\Services\DesignPatterns\Fundamental\EventChannel;

/**
 * Interface PublisherInterface
 * @package App\Services\DesignPatterns\Fundamental\EventChannel
 */
interface PublisherInterface
{

    /**
     * Уведомление подпищиков
     *
     * @param string $data
     * Данные которыми уведоляется подпищик
     *
     * @return mixed
     */
    public function publish(string $data);

}