<?php

namespace Src\FileSystem;

class Directory implements FileSystem
{
    private array $files = [];

    public function files(): array
    {
        return $this->files;
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitDirectory($this);
    }
}
