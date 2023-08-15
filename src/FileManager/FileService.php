<?php

namespace Src\FileManager;

use Illuminate\Bus\Dispatcher;

class FileService
{
    private FileCommand $command;
    private Dispatcher $commandBus;

    /**
     * @param FileCommand $command
     */
    public function __construct(FileCommand $command, Dispatcher $commandBus)
    {
        $this->command = $command;
        $this->commandBus = $commandBus;
    }

    public function setCommand(FileCommand $command)
    {
        $this->command = $command;
    }

    public function save(): void
    {
        $this->commandBus->dispatch($this->command);
    }

}
