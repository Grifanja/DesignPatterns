<?php


namespace App\Services\DesignPatterns\Creational\SimpleFactory\Classes;



use App\Services\DesignPatterns\Creational\SimpleFactory\Interfaces\MessengerSimpleFactoryInterface;
use App\Services\DesignPatterns\Fundamental\Deligation\EmailMessenger;
use App\Services\DesignPatterns\Fundamental\Deligation\MessengerInterface;
use App\Services\DesignPatterns\Fundamental\Deligation\SmsMessenger;
use Exception;

class MessengerSimpleFactory implements MessengerSimpleFactoryInterface
{

    /**
     * @param string $type
     * @return MessengerInterface
     * @throws Exception
     */
    public  function build(string $type = 'email'): MessengerInterface
    {

        switch ($type){
            case 'email':
                $messenger = new EmailMessenger();
                $messenger->setMessage('new email message');
                $messenger->setSender( 'admin@new.one');
                break;
            case 'sms':
                $messenger = new SmsMessenger();
                $messenger->setMessage('new sms message');
                $messenger->setSender('+380669849093');
                break;
            default:
                throw new Exception("bad type {$type}");
        }

        return $messenger;
    }
}