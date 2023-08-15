<?php

namespace Src\reportExporter;

use Illuminate\Database\Eloquent\Collection;

abstract class UserReport
{
    public function generate(Collection $users): void
    {
        $result = $this->prepare($users);
        $this->export($result);
    }

    private function prepare(Collection $users): Collection
    {
        return $users->filter(function ($user) {
            return $user->age > 18;
        });
    }

    abstract protected function export(Collection $users);
}
