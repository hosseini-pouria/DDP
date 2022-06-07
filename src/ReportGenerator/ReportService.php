<?php

namespace Src\ReportGenerator;

class ReportService implements ReportGenerator
{
    public function generate(): string
    {
        return 'total amount = 10000';
    }
}
