<?php

namespace Src\DiscountGenerator;

use Illuminate\Support\Str;

class Client
{
    private DiscountFactory $discountFactory;

    /**
     * @param DiscountFactory $discountFactory
     */
    public function __construct(DiscountFactory $discountFactory)
    {
        $this->discountFactory = $discountFactory;
    }

    public function cteateDiscount()
    {
        foreach (range(1, 100000) as $counter) {
            $dateRange = mt_rand(1, 5);
            $limitRange = mt_rand(1, 3);
            $minRange = [0, 10000, 20000];
            $maxRange = [100000, 200000, 500000];
            $percentRange = mt_rand(15, 35);
            $this->discountFactory->createDiscount(
                Str::random(10),
                0,
                \DateTimeImmutable::createFromMutable(new \DateTime("+ {$dateRange} day")),
                $limitRange,
                array_rand($minRange),
                array_rand($maxRange),
                $percentRange
            );
        }

    }
}
