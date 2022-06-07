<?php

namespace Src\ReportGenerator;

interface ReportGenerator
{
    public function generate(): string;
}
