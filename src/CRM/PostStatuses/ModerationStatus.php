<?php

namespace Src\CRM\PostStatuses;

use Src\CRM\PostStatus;

class ModerationStatus extends PostStatus
{

    public function draft(): void
    {
        $this->post->transitionTo(new DraftStatus());
    }

    public function moderation(): void
    {
        $this->post->transitionTo(new ModerationStatus());
    }

    public function published(): void
    {
        $this->post->transitionTo(new PublishedStatus());
    }
}
