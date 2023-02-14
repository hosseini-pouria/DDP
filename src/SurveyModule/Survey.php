<?php

namespace Src\SurveyModule;

abstract class Survey
{
    protected PresentationInterface $mode;

    /**
     * @param PresentationInterface $mode
     */
    public function __construct(PresentationInterface $mode)
    {
        $this->mode = $mode;
    }

    abstract public function display();
}
