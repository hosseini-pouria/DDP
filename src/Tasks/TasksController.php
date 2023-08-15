<?php

namespace Src\Tasks;

use Illuminate\Http\Request;

class TasksController
{
    public function add(Request $request): void
    {
        $addTaskHandler = new AddTaskHandler();
        $addTaskCommand = new AddTaskCommand(
            $request->get('title'),
            $request->get('content'),
            $addTaskHandler
        );
        $addTaskCommand->execute();
    }
}
