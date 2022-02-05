<?php

namespace Src\Solid\OCP\Before;

class JsonEncoder
{

    public function __construct()
    {
    }

    public function encode($data): string
    {
        return '{data:""}';
    }
}
