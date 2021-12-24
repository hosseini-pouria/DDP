<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Src\FactoryMethod\Publisher\Message;
use Src\FactoryMethod\Publisher\MessagePublisher;

class MessagesController extends Controller
{
    private $publisher;

    /**
     * @param MessagePublisher $publisher
     */
    public function __construct(MessagePublisher $publisher)
    {
        $this->publisher = $publisher;
    }

    public function publishMessage(Request $request)
    {
        $this->publisher->publish(new Message('برق رفت', 'power-went-down.png', 'برق‌ها رفت و زندگی فقط 100 سال اولش سخته'));
    }
}
