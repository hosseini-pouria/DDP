<?php

namespace Src\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements;

use Src\AbstractFactory\FormBuilder\Elements\ButtonInterface;

class Button implements ButtonInterface
{

    public function render()
    {
        echo '<button name="save-button" class="form-input">Button</button>';
    }
}
