<?php


namespace App\Services\DesignPatterns\Fundamental\Deligation;


interface MessengerInterface
{

    /**
     * @param string $value
     * @return MessengerInterface
     */
    public function setSender(string $value): MessengerInterface;

    /**
     * @param string $value
     * @return MessengerInterface
     */
    public function setRecipient(string $value): MessengerInterface;

    /**
     * @param string $value
     * @return MessengerInterface
     */
    public function setMessage(string $value): MessengerInterface;

    /**
     * @return bool
     */
    public function send(): bool ;

}