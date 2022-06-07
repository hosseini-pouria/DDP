<?php

namespace Src\ReportGenerator;

class ReportWithHeader extends ReportDecorator
{

    public function generate(): string
    {
        return <<<HEADER
            header report
            {$this->reportGenerator->generate()}
            HEADER;
    }
}
