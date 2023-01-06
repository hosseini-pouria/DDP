<?php

namespace Src\AbstractFactory\FormBuilder\Providers\Tailwind;

use Src\AbstractFactory\FormBuilder\Elements\ButtonInterface;
use Src\AbstractFactory\FormBuilder\Elements\RadioButtonInterface;
use Src\AbstractFactory\FormBuilder\Elements\TextAreaInterface;
use Src\AbstractFactory\FormBuilder\Elements\TextInputInterface;
use Src\AbstractFactory\FormBuilder\FromUIFactoryInterface;
use Src\AbstractFactory\FormBuilder\Providers\Tailwind\Elements\Button;
use Src\AbstractFactory\FormBuilder\Providers\Tailwind\Elements\RadioButton;
use Src\AbstractFactory\FormBuilder\Providers\Tailwind\Elements\TextArea;
use Src\AbstractFactory\FormBuilder\Providers\Tailwind\Elements\TextInput;

class TailwindFormUIFactory implements FromUIFactoryInterface
{

    public function createButton(): ButtonInterface
    {
        return new Button();
    }

    public function createTextInput(): TextInputInterface
    {
        return new TextInput();
    }

    public function createTextArea(): TextAreaInterface
    {
        return new TextArea();
    }

    public function createRadioButton(): RadioButtonInterface
    {
        return new RadioButton();
    }
}
