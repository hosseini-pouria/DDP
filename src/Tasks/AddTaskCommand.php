<?php

namespace Src\Tasks;

class AddTaskCommand implements Command
{
    private string $title;
    private string $content;
    private AddTaskHandler $addTaskHandler;

    /**
     * @param string $title
     * @param string $content
     * @param AddTaskHandler $addTaskHandler
     */
    public function __construct(string $title, string $content, AddTaskHandler $addTaskHandler)
    {
        $this->title = $title;
        $this->content = $content;
        $this->addTaskHandler = $addTaskHandler;
    }

    public function execute(): void
    {
        $this->addTaskHandler->execute($this);
    }
}
