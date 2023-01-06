<?php

namespace Src\AbstractFactory\ReportFactory;

interface ReportFactoryInterface
{
    public function createReportHeader(array $params):ReportHeaderInterface;

    public function createReportBody(array $params):ReportBodyInterface;

    public function createReportFooter(array $params):ReportFooterInterface;
}
