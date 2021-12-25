<?php

namespace Src\FactoryMethod\Logger;

class LogMessage
{
    private $content;

    /**
     * @param $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}
