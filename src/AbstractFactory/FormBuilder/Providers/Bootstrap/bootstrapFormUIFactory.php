<?php

namespace Src\AbstractFactory\FormBuilder\Providers\Bootstrap;

use Src\AbstractFactory\FormBuilder\Elements\ButtonInterface;
use Src\AbstractFactory\FormBuilder\Elements\RadioButtonInterface;
use Src\AbstractFactory\FormBuilder\Elements\TextAreaInterface;
use Src\AbstractFactory\FormBuilder\Elements\TextInputInterface;
use Src\AbstractFactory\FormBuilder\FromUIFactoryInterface;
use Src\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements\Button;
use Src\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements\RadioButton;
use Src\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements\TextArea;
use Src\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements\TextInput;

class bootstrapFormUIFactory implements FromUIFactoryInterface
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
