<?php

namespace Src\EventDispatcher;

interface Observer
{
    public function notify(string $event, object $emitter, $data = null);
}
