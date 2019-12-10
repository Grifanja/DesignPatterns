<?php


namespace App\Services\DesignPatterns\Fundamental\Deligation;


class SmsMessenger extends AbstractMessenger
{
    /**
     * @return bool
     */
    public function send(): bool
    {
        dump('send by '.__METHOD__);
        return parent::send();
    }
}