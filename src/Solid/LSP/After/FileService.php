<?php

namespace Src\Solid\LSP\After;

class FileService
{
    private $file;

    /**
     * @param DownloadableFileInterface $file
     */
    public function __construct(DownloadableFileInterface $file)
    {
        $this->file = $file;
    }

}
