<?php


namespace App\Services\DesignPatterns\Fundamental\EventChannel;


class EventChannelJob
{

    public static function run()
    {
        $newsChannel     = new EventChannel();
        $highgardenGroup = new Publisher('highgarden-news',$newsChannel);
        $winterfellNews  = new Publisher('winterfell-news',$newsChannel);
        $winterfellDaily = new Publisher('winterfell-news',$newsChannel);

        $sansa           = new Subscriber('Sansa Stark');
        $arya            = new Subscriber('Arya Stark');
        $cersei          = new Subscriber('Cersei Lannister');
        $snow            = new Subscriber('Jon Snow');

        $newsChannel->subscribe('highgarden-news',$cersei)
                    ->subscribe('winterfell-news',$sansa)
                    ->subscribe('winterfell-news',$arya)
                    ->subscribe('highgarden-news',$arya)
                    ->subscribe('highgarden-news',$snow);

        $highgardenGroup->publish('New highgarden post');
        $winterfellNews->publish('New winterfell post');
        $winterfellDaily->publish('New alternative highgarden post');

    }

}