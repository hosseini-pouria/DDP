<?php

namespace Src\ReportGenerator;

class Client
{
    public function getReport()
    {
        $report = new ReportService();
        $withHeader = new ReportWithHeader($report);

        echo $withHeader->generate();
    }
}
