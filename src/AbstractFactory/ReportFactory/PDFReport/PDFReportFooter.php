<?php

namespace Src\AbstractFactory\ReportFactory\PDFReport;

use Src\AbstractFactory\ReportFactory\ReportFooterInterface;

class PDFReportFooter implements ReportFooterInterface
{
    private array $params;

    /**
     * @param array $params
     */
    public function __construct(array $params)
    {
        $this->params = $params;
    }

    public function generate():string
    {
        // TODO: Implement generate() method.
    }
}
