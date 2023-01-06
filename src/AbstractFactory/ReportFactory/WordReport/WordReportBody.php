<?php

namespace Src\AbstractFactory\ReportFactory\WordReport;

use Src\AbstractFactory\ReportFactory\ReportBodyInterface;

class WordReportBody implements ReportBodyInterface
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
