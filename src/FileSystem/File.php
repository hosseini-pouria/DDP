<?php

namespace Src\FileSystem;

class File implements FileSystem
{
    public function path(): string
    {
        return __FILE__;
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitFile($this);
    }
}
