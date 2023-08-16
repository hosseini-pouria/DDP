<?php

namespace Src\Tax;

interface Visitor
{
    public function visitHighRange(Manager $manager);

    public function visitMidRange(TeamLead $lead);

    public function visitLowRange(Developer $developer);
}
