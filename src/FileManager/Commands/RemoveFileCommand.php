<?php

namespace Src\FileManager\Commands;

use Src\FileManager\FileCommand;
use Src\FileManager\FileManager;

class RemoveFileCommand implements FileCommand
{
    private FileManager $fileManager;
    private int $fileId;

    /**
     * @param FileManager $fileManager
     * @param int $fileId
     */
    public function __construct(FileManager $fileManager, int $fileId)
    {
        $this->fileManager = $fileManager;
        $this->fileId = $fileId;
    }

    public function execute(): void
    {
        $this->fileManager->remove($this);
    }
}
