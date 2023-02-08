<?php

namespace Src\CampaignManager\Campaings;

use Src\CampaignManager\Campaign;

class PPCCampaign extends Campaign
{

    public function run()
    {
        $this->promotion->display();
    }
}
