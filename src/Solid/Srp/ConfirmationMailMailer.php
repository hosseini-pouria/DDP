<?php

namespace Src\Solid\Srp;

class ConfirmationMailMailer
{
    private ConfirmationMailFactory $confirmationMailFactory;
    private MailerInterface $mailer;

    /**
     * @param ConfirmationMailFactoryInterface $confirmationMailFactory
     * @param MailerInterface $mailer
     */
    public function __construct(
        ConfirmationMailFactoryInterface $confirmationMailFactory,
        MailerInterface $mailer)
    {
        $this->confirmationMailFactory = $confirmationMailFactory;
        $this->mailer = $mailer;
    }

    public function sendTo(User $user)
    {
        $message = $this->createMessageFor($user);

        $this->sendMessage($message);
    }

    private function createMessageFor(User $user): Message
    {
        return $this->confirmationMailFactory->createMessageFor($user);
    }

    private function sendMessage(Message $message)
    {
        $this->mailer->send($message);
    }
}
