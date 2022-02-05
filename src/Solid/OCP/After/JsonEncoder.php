<?php

namespace Src\Solid\OCP\After;

class JsonEncoder implements EncoderInterface
{

    public function __construct()
    {
    }

    public function encode($data): string
    {
        return '{data:""}';
    }
}
