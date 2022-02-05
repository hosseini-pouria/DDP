<?php

namespace Src\Solid\OCP\Before;

class GenericEncoder
{
    public function encode($data, string $format): string
    {
        if ($format == 'json')
            $encoder = new JsonEncoder();
        elseif ($format == 'xml')
            $encoder = new XMLEncoder();
        else
            throw new \InvalidArgumentException('Invalid format');

        return $encoder->encode($data);
    }
}
