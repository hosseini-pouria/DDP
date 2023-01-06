<?php

namespace Src\AbstractFactory\FormBuilder;

use Src\AbstractFactory\FormBuilder\Elements\ButtonInterface;
use Src\AbstractFactory\FormBuilder\Elements\RadioButtonInterface;
use Src\AbstractFactory\FormBuilder\Elements\TextAreaInterface;
use Src\AbstractFactory\FormBuilder\Elements\TextInputInterface;

interface FromUIFactoryInterface
{
    public function createButton():ButtonInterface;

    public function createTextInput():TextInputInterface;

    public function createTextArea():TextAreaInterface;

    public function createRadioButton():RadioButtonInterface;
}
