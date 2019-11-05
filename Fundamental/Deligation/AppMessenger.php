<?php


namespace App\Services\DesignPatterns\Fundamental\Deligation;


class AppMessenger implements MessengerInterface
{
    /**
     * @var MessengerInterface
     */
    private $messenger;

    /**
     * @return mixed
     */
    public function __construct()
    {
        $this->toEmail();
    }

    public function toEmail(): MessengerInterface
    {
        $this->messenger = new EmailMessenger();
        return $this;
    }

    public function toSms(): MessengerInterface
    {
        $this->messenger = new SmsMessenger();
        return $this;
    }


    /**
     * @param string $value
     * @return MessengerInterface
     */
    public function setSender(string $value): MessengerInterface
    {
        $this->messenger->setSender($value);
        return $this;
    }

    /**
     * @param string $value
     * @return MessengerInterface
     */
    public function setRecipient(string $value): MessengerInterface
    {
        $this->messenger->setRecipient($value);
        return $this;
    }

    /**
     * @param string $value
     * @return MessengerInterface
     */
    public function setMessage(string $value): MessengerInterface
    {
        $this->messenger->setMessage($value);
        return $this;
    }

    /**
     * @return bool
     */
    public function send(): bool
    {
        return $this->messenger->send();
    }
}