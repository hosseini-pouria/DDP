<?php

namespace Src\AbstractFactory\ReportFactory\HTMLReport;

use Src\AbstractFactory\ReportFactory\ReportBodyInterface;

class HTMLReportBody implements ReportBodyInterface
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
            <body>
                <p>" . $this->params['content'] . "</p>
            </body>
        ";
    }
}
