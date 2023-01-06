<?php

namespace Src\AbstractFactory\ReportFactory\HTMLReport;

use Src\AbstractFactory\ReportFactory\ReportHeaderInterface;

class HTMLReportHeader implements ReportHeaderInterface
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
        return "
            <html>
            <head>
                <title>" . $this->params['title'] . "</title>
            </head>
        ";
    }
}
