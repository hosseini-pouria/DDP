<?php

namespace Src\CampaignManager\Promotion;

use Src\CampaignManager\PromotionInterface;

class TextPromotion implements PromotionInterface
{
    private $title;
    private $url;

    /**
     * @param $title
     * @param $url
     */
    public function __construct($title, $url)
    {
        $this->title = $title;
        $this->url = $url;
    }

    public function display()
    {
        return <<<TEXT
            <a title="{$this->title}"><span>{$this->title}</span></a>
        TEXT;
    }
}
