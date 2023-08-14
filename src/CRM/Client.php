<?php

namespace Src\CRM;

class Client
{
    public function publishPost(): void
    {
        $post = new Post('sample title', 'sample content');
        $post->moderation();
    }
}
