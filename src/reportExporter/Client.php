<?php

namespace Src\reportExporter;

use App\Models\User;

class Client
{
    private UserReport $reporter;

    /**
     * @param UserReport $reporter
     */
    public function __construct(UserReport $reporter)
    {
        $this->reporter = $reporter;
    }

    public function exportUsers(string $keyword): void
    {
        $this->reporter->generate(User::query()
            ->where('first_name', 'LIKE', '%' . $keyword . '%')->get());
    }
}
