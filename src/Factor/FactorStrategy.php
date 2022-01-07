<?php

namespace Src\Factor;

interface FactorStrategy
{
    public static function Validate(FactorData $factorData);

    public static function Save(FactorData $factorData);

    public static function Edit(FactorData $factorData);

    public static function Delete(FactorData $factorData);
}
