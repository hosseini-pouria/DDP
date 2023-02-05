<?php

namespace Src\Tasks\Importers;

use Src\Tasks\Packages\TodoistAPI;
use Src\Tasks\Packages\TodoistTask;
use Src\Tasks\Task;
use Src\Tasks\TaskImporterInterface;
use Src\Tasks\TaskStatus;

class TodoistImporter implements TaskImporterInterface
{
    private TodoistAPI $todoistApi;

    /**
     * @param TodoistAPI $todoistApi
     */
    public function __construct(TodoistAPI $todoistApi)
    {
        $this->todoistApi = $todoistApi;
    }

    public function import(): array
    {
        $tasks = $this->todoistApi->fetchTasks(0, 0);

        return collect($tasks)->map(function (TodoistTask $todoistTask){
            return new Task($todoistTask->getName(), '',  TaskStatus::INIT);
        })->toArray();
    }
}
