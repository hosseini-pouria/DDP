<?php

namespace Src\Withdrawal;

abstract class WithdrawalStatus
{

    abstract public function pending();
    abstract public function rejected();
    abstract public function approve();
    abstract public function finished();
}
