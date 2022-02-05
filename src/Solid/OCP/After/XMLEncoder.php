<?php

namespace Src\Solid\OCP\After;

class XMLEncoder implements EncoderInterface
{

    public function __construct()
    {
    }

    public function encode($data): string
    {
        return '<data></data>';
    }
}
