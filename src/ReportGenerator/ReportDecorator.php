<?php

namespace Src\ReportGenerator;

abstract class ReportDecorator implements ReportGenerator
{
    protected ReportGenerator $reportGenerator;

    /**
     * @param ReportGenerator $reportGenerator
     */
    public function __construct(ReportGenerator $reportGenerator)
    {
        $this->reportGenerator = $reportGenerator;
    }


}
