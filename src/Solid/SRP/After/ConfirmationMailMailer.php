<?php

namespace Src\Solid\SRP\Before;

class ConfirmationMailMailer
{
    private TemplatingInterface $templating;
    private TranslatorInterface $translator;
    private MailerInterface $mailer;

    /**
     * @param TemplatingInterface $templating
     * @param TranslatorInterface $translator
     * @param MailerInterface $mailer
     */
    public function __construct(
        TemplatingInterface $templating,
        TranslatorInterface $translator,
        MailerInterface $mailer
    )
    {
        $this->templating = $templating;
        $this->translator = $translator;
        $this->mailer = $mailer;
    }

    public function sendTo(User $user)
    {
        $message = $this->createMessageFor($user);
        $this->sendMessage($message);
    }

    private function createMessageFor(User $user): Message
    {
        $subject = $this->translator->translate('Please confirm your email');
        $body = $this->templating->render('email.confirm', [
            'confirm_code' => $user->getConfirmCode()
        ]);

        return new Message($subject, $body, $user->getEmailAddress());
    }

    private function sendMessage(Message $message)
    {
        $this->mailer->send();
    }
}
