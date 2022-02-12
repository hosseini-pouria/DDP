<?php

namespace Src\Solid\LSP\Before;

class FileService
{
    private $file;

    /**
     * @param FileInterface $file
     */
    public function __construct(FileInterface $file)
    {
        $this->file = $file;
    }

}
