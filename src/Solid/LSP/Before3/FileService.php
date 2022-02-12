<?php

namespace Src\Solid\LSP\Before3;

class FileService implements FileServiceInterface
{

    public function encode(FileInterface $file)
    {
        if (!($file instanceof LocalFile)) {
            throw new \InvalidArgumentException('only local file can be encode');
        }
    }
}
