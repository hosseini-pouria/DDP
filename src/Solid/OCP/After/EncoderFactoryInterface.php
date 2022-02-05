<?php

namespace Src\Solid\OCP\After;

interface EncoderFactoryInterface
{
    public function createEncoder(string $format): EncoderInterface;
}
