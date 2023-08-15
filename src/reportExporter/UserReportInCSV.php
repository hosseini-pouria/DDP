<?php

namespace Src\reportExporter;

use Illuminate\Database\Eloquent\Collection;

class UserReportInCSV extends UserReport
{

    protected function export(Collection $users)
    {
       // fputcsv()
    }
}
