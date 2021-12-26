<?php

namespace Src\EventDispatcher;

class EventDispatcher
{
    private $observers = [];

    public function attach(string $event, Observer $observer):void
    {
        $this->initEventGroup($event);
    }

    public function detach(string $event, Observer $observer)
    {
        foreach ($this->getEventObservers($event) as $key => $observerItem)
            if ($observer == $observerItem)
                unset($this->observers[$event][$key]);
    }

    public function fire(string $event, object $emitter, $data = null)
    {
        foreach ($this->getEventObservers($event) as $observer)
            $observer->notify($event,$emitter,$data);
    }

    private function initEventGroup(string $event)
    {
        if (!isset($this->observers[$event]))
            $this->observers[$event] = [];
    }

    private function getEventObservers(string $event)
    {
        $this->initEventGroup($event);

        return $this->observers[$event];
    }
}
