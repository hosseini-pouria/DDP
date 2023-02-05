<?php

namespace Src\Tasks\Importers;

use Src\Tasks\Packages\MSTodoAPI;
use Src\Tasks\Packages\MSTodoTask;
use Src\Tasks\Packages\TodoistTask;
use Src\Tasks\Task;
use Src\Tasks\TaskStatus;

class MSTodoImporter
{
    private MSTodoAPI $msTodoApi;

    /**
     * @param MSTodoAPI $msTodoApi
     */
    public function __construct(MSTodoAPI $msTodoApi)
    {
        $this->msTodoApi = $msTodoApi;
    }

    public function import(): array
    {
        $tasks = $this->msTodoApi->getTasks();

        return collect($tasks)->map(function (MSTodoTask $task){
            return new Task($task->getTitle(), $task->getContent(),  $task->getStatus() == "DOING" ? TaskStatus::DOING: TaskStatus::INIT);
        })->toArray();
    }
}
