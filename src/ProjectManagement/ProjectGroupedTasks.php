<?php

namespace Src\ProjectManagement;

class ProjectGroupedTasks implements ProjectComponentInterface
{
    private array $tasks;

    public function add(ProjectTask $projectTask)
    {
        $this->tasks[] = $projectTask;
    }
    public function done()
    {
        foreach ($this->tasks as $task) {
            $task->done();
        }
    }

    public function duplicate()
    {
        // TODO: Implement duplicate() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function move()
    {
        // TODO: Implement move() method.
    }
}
