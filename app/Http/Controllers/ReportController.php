<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Src\AbstractFactory\ReportFactory\ReportFactoryInterface;

class ReportController extends Controller
{
    private ReportFactoryInterface $reportFactory;

    /**
     * @param ReportFactoryInterface $reportFactory
     */
    public function __construct(ReportFactoryInterface $reportFactory)
    {
        $this->reportFactory = $reportFactory;
    }

    public function printReport(Request $request)
    {
        $header = $this->reportFactory->createReportHeader(['title' => 'گزارش مالی سال 1400']);
        $body = $this->reportFactory->createReportBody(['content' => 'امسال از نظر مالی وضعیت خوبی نداشتیم.']);
        $footer = $this->reportFactory->createReportFooter(['footerText' => 'این متن پایانی گزارش می‌باشد']);

        return view('report', compact('header', 'body', 'footer'));
    }
}
