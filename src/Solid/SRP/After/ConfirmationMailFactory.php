<?php

namespace Src\Solid\SRP\After;

class ConfirmationMailFactory
{
    private TranslatorInterface $translator;
    private TemplatingInterface $templating;

    /**
     * @param TranslatorInterface $translator
     * @param TemplatingInterface $templating
     */
    public function __construct(
        TranslatorInterface $translator,
        TemplatingInterface $templating)
    {
        $this->translator = $translator;
        $this->templating = $templating;
    }

    public function createMessageFor(User $user): Message
    {
        $subject = $this->translator->translate('Please confirm your email');
        $body = $this->templating->render('email.confirm', [
            'confirm_code' => $user->getConfirmCode()
        ]);

        return new Message($subject, $body, $user->getEmailAddress());
    }
}
