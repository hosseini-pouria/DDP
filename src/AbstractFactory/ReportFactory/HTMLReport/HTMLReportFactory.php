<?php

namespace Src\AbstractFactory\ReportFactory\HTMLReport;

use Src\AbstractFactory\ReportFactory\ReportBodyInterface;
use Src\AbstractFactory\ReportFactory\ReportFactoryInterface;
use Src\AbstractFactory\ReportFactory\ReportFooterInterface;
use Src\AbstractFactory\ReportFactory\ReportHeaderInterface;

class HTMLReportFactory implements ReportFactoryInterface
{

    public function createReportHeader(array $params): ReportHeaderInterface
    {
        return new HTMLReportHeader($params);
    }

    public function createReportBody(array $params): ReportBodyInterface
    {
        return new HTMLReportBody($params);
    }

    public function createReportFooter(array $params): ReportFooterInterface
    {
        return new HTMLReportFooter($params);
    }
}
