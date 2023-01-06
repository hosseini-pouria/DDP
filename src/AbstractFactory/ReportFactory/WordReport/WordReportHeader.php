<?php

namespace Src\AbstractFactory\ReportFactory\WordReport;

use Src\AbstractFactory\ReportFactory\ReportHeaderInterface;

class WordReportHeader implements ReportHeaderInterface
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
