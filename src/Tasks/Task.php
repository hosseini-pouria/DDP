<?php

namespace Src\Tasks;

class Task
{
 private string $title;
 private string $description;
 private int $status;

    /**
     * @param string $title
     * @param string $description
     * @param int $status
     */
    public function __construct(string $title, string $description, int $status)
    {
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }


}
