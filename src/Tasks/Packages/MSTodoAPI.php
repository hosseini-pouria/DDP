<?php

namespace Src\Tasks\Packages;

class MSTodoAPI
{
    public function getTasks(): array
    {
        return [
            new MSTodoTask('ms todo task', 'task content', 'INIT')
        ];
    }
}
