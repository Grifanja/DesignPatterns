<?php


namespace App\Services\DesignPatterns\Creational\StaticFactory;


use App\Services\DesignPatterns\Creational\StaticFactory\Interfaces\MessengerStaticFactoryInterface;
use App\Services\DesignPatterns\Fundamental\Deligation\AppMessenger;
use App\Services\DesignPatterns\Fundamental\Deligation\MessengerInterface;
use Exception;

class StaticFactory implements MessengerStaticFactoryInterface
{

    public static function run():void
    {
        dump(StaticFactory::build('email'));
        dump(StaticFactory::build('sms'));
    }

    /**
     * @param string $type
     * @return MessengerInterface
     * @throws Exception
     */
    public static function build(string $type = 'email'): MessengerInterface
    {
        $messenger = new AppMessenger();

        switch ($type){
            case 'email':
                $messenger->toEmail();
                $sender = 'admin@new.one';
                break;
            case 'sms':
                $messenger->toSms();
                $sender = '+380669849093';
                break;
            default:
                throw new Exception("bad type {$type}");
        }

        $messenger->setSender($sender)->setMessage('new message');
        return $messenger;
    }


}