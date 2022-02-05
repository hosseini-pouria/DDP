<?php

namespace Src\Solid\OCP\After;

class GenericEncoder
{
    private EncoderFactory $encoderFactory;

    /**
     * @param EncoderFactoryInterface $encoderFactory
     */
    public function __construct(EncoderFactoryInterface $encoderFactory)
    {
        $this->encoderFactory = $encoderFactory;
    }

    public function encode($data, string $format): string
    {
        $encoder = $this->encoderFactory->createEncoder($format);
        return $encoder->encode($data);
    }
}
