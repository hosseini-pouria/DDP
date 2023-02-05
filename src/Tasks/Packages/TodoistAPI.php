<?php

namespace Src\Tasks\Packages;

class TodoistAPI
{
    private $token;

    /**
     * @param $token
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    public function fetchTasks(int $category, int $count): array
    {
        return [

        ];
    }
}
