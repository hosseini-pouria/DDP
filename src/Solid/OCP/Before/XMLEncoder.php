<?php

namespace Src\Solid\OCP\Before;

class XMLEncoder
{

    public function __construct()
    {
    }

    public function encode($data): string
    {
        return '<data></data>';
    }
}
