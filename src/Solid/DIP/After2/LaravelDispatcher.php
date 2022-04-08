<?php

namespace Src\Solid\DIP\After2;

use Illuminate\Contracts\Events\Dispatcher;

class LaravelDispatcher implements DispatcherInterface
{
    private $dispatcher;

    /**
     * @param Dispatcher $dispatcher
     */
    public function __construct(Dispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function dispatch(string $event, array $payload): void
    {
        $this->dispatcher->dispatch($event, $payload);
    }
}
