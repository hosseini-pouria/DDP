<?php

namespace Src\Solid\Srp;

class ConfirmationMailFactory implements ConfirmationMailFactoryInterface
{
    private TemplatingEngineInterface $templating;
    private TranslatorInterface $translator;

    /**
     * @param TemplatingEngineInterface $templating
     * @param TranslatorInterface $translator
     */
    public function __construct(
        TemplatingEngineInterface $templating,
        TranslatorInterface $translator)
    {
        $this->templating = $templating;
        $this->translator = $translator;
    }

    public function createMessageFor(User $user): Message
    {
        $subject = $this->translator->translate('Please confirm your email address');
        $body = $this->templating->render('email.confirm', [
            'confirm_code' => $user->getConfermCode()
        ]);

        return new Message($subject, $body, $user->getEmailAddress());
    }
}
