<?php

namespace Src\AbstractFactory\ReportFactory\WordReport;

use Src\AbstractFactory\ReportFactory\ReportBodyInterface;
use Src\AbstractFactory\ReportFactory\ReportFactoryInterface;
use Src\AbstractFactory\ReportFactory\ReportFooterInterface;
use Src\AbstractFactory\ReportFactory\ReportHeaderInterface;

class WordReportFactory implements ReportFactoryInterface
{

    public function createReportHeader(array $params): ReportHeaderInterface
    {
        return new WordReportHeader($params);
    }

    public function createReportBody(array $params): ReportBodyInterface
    {
        return new WordReportBody($params);
    }

    public function createReportFooter(array $params): ReportFooterInterface
    {
        return new WordReportFooter($params);
    }
}
