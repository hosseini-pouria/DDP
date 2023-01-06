<?php

namespace Src\AbstractFactory\FormBuilder\Providers\Tailwind\Elements;

use Src\AbstractFactory\FormBuilder\Elements\ButtonInterface;

class Button implements ButtonInterface
{

    public function render()
    {
        echo '<button class="btn btn-lg" name="save-button">Button</button>';
    }
}
