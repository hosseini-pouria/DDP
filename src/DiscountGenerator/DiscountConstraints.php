<?php

namespace Src\DiscountGenerator;

class DiscountConstraints
{
    private \DateTimeImmutable $expirationDate;
    private int $limit;
    private int $minAmount = 0;
    private int $maxAmount;
    private int $percent;

    /**
     * @param \DateTimeImmutable $expirationDate
     * @param int $limit
     * @param int $minAmount
     * @param int $maxAmount
     * @param int $percent
     */
    public function __construct(\DateTimeImmutable $expirationDate, int $limit, int $minAmount, int $maxAmount, int $percent)
    {
        $this->expirationDate = $expirationDate;
        $this->limit = $limit;
        $this->minAmount = $minAmount;
        $this->maxAmount = $maxAmount;
        $this->percent = $percent;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getExpirationDate(): \DateTimeImmutable
    {
        return $this->expirationDate;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @return int
     */
    public function getMinAmount(): int
    {
        return $this->minAmount;
    }

    /**
     * @return int
     */
    public function getMaxAmount(): int
    {
        return $this->maxAmount;
    }

    /**
     * @return int
     */
    public function getPercent(): int
    {
        return $this->percent;
    }

}
