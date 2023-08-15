<?php

namespace Src\Blog;

abstract class Post
{
    public function publish()
    {

    }

    abstract protected function draft();

    abstract protected function review();
}
