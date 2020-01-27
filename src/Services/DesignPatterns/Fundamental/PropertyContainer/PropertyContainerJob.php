<?php


namespace App\Services\DesignPatterns\Fundamental\PropertyContainer;


class PropertyContainerJob
{
    public static function run()
    {
        $item         = new BlogPost();

        $item->setTitle('new title');
        $item->setCategory(10);

        $item->addProperty('view_count',100);

        $item->addProperty('last_update','2030-20-01');
        $item->setProperty('last_update','2030-20-02');

        $item->addProperty('read_only',true);
        $item->deleteProperty('read_only');
        dump($item);

    }

    /**
     * @return string
     */
    public static function getDescription(): string
    {
        $desc = 'Контейнер свойств (англ. property container) — фундаментальный шаблон проектирования, 
        который служит для обеспечения возможности уже построенного и развернутого приложения.
        Классическим примером использованием шаблона является приложение, используемое для хранения и
        классификации информации. Например, приложение заказа фильмов[1]. При разработке класса,
        представляющего фильм, при разработке и запуске приложения невозможно предусмотреть все возможные           
        свойства (атрибуты), описывающие фильм. Поэтому класс фильма при необходимости в любой момент может
        быть расширен дополнительными свойствами. Для этого требуются предусмотреть механизм расширения 
        свойств перед выпуском приложения.
        Контейнер свойств, предоставляет механизм для динамического расширения объектов дополнительными
        атрибутами во время выполнения. Кроме этого, приложению могут потребоваться ещё модули, которые 
        явным образом используют преимущества нового свойства, если оно было добавлено.
         https://www.youtube.com/watch?v=uVWPusUe3Aw&list=PLoonZ8wII66hKbEvIVAZnp1h4CE-4Mtk4&index=2';
        return $desc;
    }

}