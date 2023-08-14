<?php

namespace Src\CRM;

abstract class PostStatus
{
    protected Post $post;

    public function setPost(Post $post): void
    {
        $this->post = $post;
    }

    abstract public function draft();
    abstract public function moderation();
    abstract public function published();
}
