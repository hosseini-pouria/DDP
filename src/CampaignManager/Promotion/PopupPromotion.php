<?php

namespace Src\CampaignManager\Promotion;

use Src\CampaignManager\PromotionInterface;

class PopupPromotion implements PromotionInterface
{
    private $bannerUrl;
    private $url;

    /**
     * @param $bannerUrl
     * @param $url
     */
    public function __construct($bannerUrl, $url)
    {
        $this->bannerUrl = $bannerUrl;
        $this->url = $url;
    }

    public function display()
    {
        return <<<POPUP
            <div class="popup">
                <a href="{$this->bannerUrl}">
                    <img src="{$this->url}">
                </a>
            </div>
        POPUP;

    }
}
