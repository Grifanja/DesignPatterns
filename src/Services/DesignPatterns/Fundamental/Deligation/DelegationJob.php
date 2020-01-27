<?php


namespace App\Services\DesignPatterns\Fundamental\Deligation;


class DelegationJob
{
    public static function run()
    {
        $item         = new AppMessenger();

        $item->setSender('Sender@mail.net')
            ->setRecipient('recipient@mail.com')
            ->setMessage("hi what is up i am email")
            ->send();
        dump($item);

        $item->toSms()
            ->setSender('323432424234')
            ->setRecipient('5454545555')
            ->setMessage("hi what is up i am sms")
            ->send();
        dump($item);
    }
    /**
     * @return string
     */
    public static function getDescription(): string
    {
        $desc = 'Делегирование (англ. Delegation) — основной шаблон проектирования, в котором объект
         внешне выражает некоторое поведение, но в реальности передаёт ответственность за выполнение
         этого поведения связанному объекту. Шаблон делегирования является фундаментальной абстракцией,
         на основе которой реализованы другие шаблоны - композиция (также называемая агрегацией),
         примеси (mixins) и аспекты (aspects).
         https://www.youtube.com/watch?v=uxbmNi6XPxE&list=PLoonZ8wII66hKbEvIVAZnp1h4CE-4Mtk4&index=3';
        return $desc;
    }

}