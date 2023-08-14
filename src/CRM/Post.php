<?php

namespace Src\CRM;

use Src\CRM\PostStatuses\DraftStatus;

class Post
{
    private string $title;
    private string $content;
    private PostStatus $status;

    /**
     * @param string $title
     * @param string $content
     * @param PostStatus $status
     */
    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
        $this->transitionTo(new DraftStatus());
    }

    public function transitionTo(PostStatus $status): void
    {
        $this->status = $this->status;
        $this->status->setPost($this->status);
    }

    public function draft(): void
    {
        $this->status->draft();
    }

    public function moderation(): void
    {
        $this->status->moderation();
    }

    public function published(): void
    {
        $this->status->published();
    }
}
