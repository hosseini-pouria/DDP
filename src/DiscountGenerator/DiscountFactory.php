<?php

namespace Src\DiscountGenerator;

class DiscountFactory
{
    private array $constraints = [];
    private array $discounts = [];

    public function createDiscount(
        string $code,
        int $userId,
        \DateTimeImmutable $expirationDate,
        int $limit,
        int $minAmount,
        int $maxAmount,
        int $percent
    ): Discount
    {
        $constraint = $this->createConstraint($expirationDate, $limit, $minAmount, $maxAmount, $percent);
        $discount = new Discount($code, $userId, $constraint);
        $this->discounts[] = $discount;
        return $discount;
    }

    public function createConstraint(
        \DateTimeImmutable $expirationDate,
        int $limit,
        int $minAmount,
        int $maxAmount,
        int $percent
    ):DiscountConstraints
    {
        $key = $this->createKey(get_defined_vars());
        if (!isset($this->constraints[$key])) {
            $this->constraints[$key] = new DiscountConstraints($expirationDate, $limit, $minAmount, $maxAmount, $percent);
        }

        return $this->constraints[$key];
    }

    public function createKey(array $data): string
    {
        krsort($data);
        return md5(implode('_', $data));
    }

    public function getDiscount(): array
    {
        return $this->discounts;
    }
}
