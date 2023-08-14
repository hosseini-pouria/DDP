<?php

namespace Src\CRM\PostStatuses;

use Src\CRM\Exceptions\InvalidStatusException;
use Src\CRM\PostStatus;

class PublishedStatus extends PostStatus
{

    public function draft(): void
    {
        $this->post->transitionTo(new DraftStatus());
    }

    /**
     * @throws InvalidStatusException
     */
    public function moderation()
    {
        throw new InvalidStatusException('مطلب منتشر شده نمی تواند وارد صف بررسی شود.');
    }

    public function published()
    {
        throw new InvalidStatusException('مطلبی کی منتشر شده نمی تواند دوباره منتشر شود.');
    }
}
