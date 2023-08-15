<?php

namespace Src\reportExporter;

use Illuminate\Database\Eloquent\Collection;

class UserReportInPDF extends UserReport
{
    protected function export(Collection $users)
    {
        // export data to pdf
        // $this->dataToExport
    }
}
