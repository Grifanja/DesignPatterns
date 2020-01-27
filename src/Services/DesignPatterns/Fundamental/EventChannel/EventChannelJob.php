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

    /**
     * @return string
     */
    public static function getDescription(): string
    {
        $desc = 'Канал событий (англ. event channel) — фундаментальный шаблон проектирования, используется для
          создания канала связи и коммуникации через него посредством событий. Этот канал обеспечивает возможность
          разным издателям публиковать события и подписчикам, подписываясь на них, получать уведомления.
          Этот шаблон является расширением шаблона Издатель-подписчик (Publish/Subscribe) путем добавления функций,
          которые присущи распределенной среде. Так канал является централизованным и подписчик может получать
          опубликованные события от более, чем одного объекта, даже если он зарегистрирован только на одном канале.
          В общем случае шаблон Канал событий описывает интерфейс для объектов-представителей для подписки на канал
          событий и для объектов-представителей для публикации событий в рамках канала. Использование неких
          представителей позволяет взаимодействовать настоящим издателям и подписчикам вне рамках самого канала,
          но посредством него.
          https://www.youtube.com/watch?v=xKB2OqxF_t0&list=PLoonZ8wII66hKbEvIVAZnp1h4CE-4Mtk4&index=4';
        return $desc;
    }

}