<?php

namespace Src\Tax;

class TaxCalculator implements Visitor
{

    public function visitHighRange(Manager $manager): float
    {
        return $manager->salary() * 0.5;
    }

    public function visitMidRange(TeamLead $lead): float
    {
        return $lead->salary() * 0.35;
    }

    public function visitLowRange(Developer $developer): float
    {
        if ($developer->salary() <= 2000) {
            return 0;
        }

        return $developer->salary() * 0.20;
    }
}
