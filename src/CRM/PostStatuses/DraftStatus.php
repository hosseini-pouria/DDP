<?php

namespace Src\CRM\PostStatuses;

use Src\CRM\Exceptions\InvalidStatusException;
use Src\CRM\PostStatus;

class DraftStatus extends PostStatus
{

    public function draft(): void
    {
        $this->post->transitionTo(new DraftStatus());
    }

    public function moderation(): void
    {
        $this->post->transitionTo(new ModerationStatus());
    }

    /**
     * @throws InvalidStatusException
     */
    public function published()
    {
        throw new InvalidStatusException('مطلب از حالت پیش نویس نمی تواند منتشر شود.');
    }
}
