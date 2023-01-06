<?php

namespace Src\AbstractFactory\ReportFactory\PDFReport;

use Src\AbstractFactory\ReportFactory\ReportHeaderInterface;

class PDFReportHeader implements ReportHeaderInterface
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
