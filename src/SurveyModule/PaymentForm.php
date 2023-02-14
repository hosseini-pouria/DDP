<?php

namespace Src\SurveyModule;

class PaymentForm extends Survey
{
    private string $price;
    private string $title;

    /**
     * @param PresentationInterface $presentation
     * @param string $price
     * @param string $title
     */
    public function __construct(PresentationInterface $presentation, string $price, string $title)
    {
        parent::__construct($presentation);
        $this->price = $price;
        $this->title = $title;
    }

    public function display()
    {
        // TODO: Implement display() method.
    }
}
