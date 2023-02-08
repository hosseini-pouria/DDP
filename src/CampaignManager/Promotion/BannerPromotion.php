<?php

namespace Src\CampaignManager\Promotion;

use Src\CampaignManager\PromotionInterface;

class BannerPromotion implements PromotionInterface
{
    private $title;
    private $url;
    private $bannerUrl;

    /**
     * @param $title
     * @param $url
     * @param $bannerUrl
     */
    public function __construct($title, $url, $bannerUrl)
    {
        $this->title = $title;
        $this->url = $url;
        $this->bannerUrl = $bannerUrl;
    }

    public function display()
    {
        return <<<BANNER
            <a title="{$this->title}" href="{$this->url}"><img src="{$this->bannerUrl}" alt="{$this->title}"></a>
        BANNER;

    }
}
