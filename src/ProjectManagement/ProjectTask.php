<?php

namespace Src\ProjectManagement;

class ProjectTask implements ProjectComponentInterface
{
    private string $title;
    private string $description;
    private string $status;

    /**
     * @param string $title
     * @param string $description
     * @param string $status
     */
    public function __construct(string $title, string $description, string $status)
    {
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
    }

    public function done()
    {
        // TODO: Implement done() method.
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
