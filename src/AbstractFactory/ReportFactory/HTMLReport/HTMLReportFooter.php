<?php

namespace Src\AbstractFactory\ReportFactory\HTMLReport;

use Src\AbstractFactory\ReportFactory\ReportFooterInterface;

class HTMLReportFooter implements ReportFooterInterface
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
            <footer>
                <p>" . $this->params['footerText'] . "</p>
            </footer>
            </html>
        ";
    }
}
