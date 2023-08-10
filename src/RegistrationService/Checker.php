<?php

namespace Src\RegistrationService;

abstract class Checker
{
    private Checker $nextChecker;

    /**
     * @param Checker|null $nextChecker
     */
    public function __construct(?Checker $nextChecker)
    {
        $this->nextChecker = $nextChecker;
    }

    public function check(RegistrationRequest $request): bool
    {
        if (!$this->nextChecker) {
            return true;
        }

        return $this->nextChecker->check($request);
    }
}
