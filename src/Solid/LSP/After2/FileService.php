<?php

namespace Src\Solid\LSP\After2;

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
