<?php

namespace Src\AbstractFactory\ReportFactory\PDFReport;

use Src\AbstractFactory\ReportFactory\ReportBodyInterface;
use Src\AbstractFactory\ReportFactory\ReportFactoryInterface;
use Src\AbstractFactory\ReportFactory\ReportFooterInterface;
use Src\AbstractFactory\ReportFactory\ReportHeaderInterface;

class PDFReportFactory implements ReportFactoryInterface
{

    public function createReportHeader(array $params): ReportHeaderInterface
    {
        return new PDFReportHeader($params);
    }

    public function createReportBody(array $params): ReportBodyInterface
    {
        return new PDFReportBody($params);
    }

    public function createReportFooter(array $params): ReportFooterInterface
    {
        return new PDFReportFooter($params);
    }
}
