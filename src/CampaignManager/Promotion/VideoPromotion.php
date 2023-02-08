<?php

namespace Src\CampaignManager\Promotion;

use Src\CampaignManager\PromotionInterface;

class VideoPromotion implements PromotionInterface
{
    private $title;
    private $videoUrl;

    /**
     * @param $title
     * @param $videoUrl
     */
    public function __construct($title, $videoUrl)
    {
        $this->title = $title;
        $this->videoUrl = $videoUrl;
    }

    public function display()
    {
        return <<<VIDEO
            <video>
                <source src="{$this->videoUrl}">
            </video>
        VIDEO;

    }
}
