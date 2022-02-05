<?php

namespace Src\Solid\OCP\After;

interface EncoderFactoryConfigInterface
{
    public function addEncoderFactory(string $format, callable $factory): void;
}
