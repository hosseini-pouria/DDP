<?php

namespace Src\CampaignManager;

abstract class Campaign
{
    protected PromotionInterface $promotion;

    /**
     * @param PromotionInterface $promotion
     */
    public function __construct(PromotionInterface $promotion)
    {
        $this->promotion = $promotion;
    }

    public function changePromotion(PromotionInterface $promotion)
    {
        $this->promotion= $promotion;
    }

    abstract public function run();
}
