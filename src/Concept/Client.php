<?php

namespace Src\Concept;

class Client
{
    private Component $component;

    /**
     * @param Component $component
     */
    public function __construct(Component $component)
    {
        $this->component = $component;
    }

}
