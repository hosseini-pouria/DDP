<?php

namespace Src\FileManager\Commands;

use Src\FileManager\FileCommand;
use Src\FileManager\FileManager;

class SaveFileCommand implements FileCommand
{
    private FileManager $fileManager;
    private string $file;

    /**
     * @param FileManager $fileManager
     */
    public function __construct(FileManager $fileManager, string $file)
    {
        $this->fileManager = $fileManager;
        $this->file = $file;
    }

    public function execute(): void
    {
        $this->fileManager->save($this);
    }
}
