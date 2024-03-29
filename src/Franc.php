<?php

declare(strict_types=1);

class Franc
{
    private int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): self
    {
        return new self($this->amount * $multiplier);
    }

    public function equals(self $that): bool
    {
        return $this->amount === $that->amount;
    }
}
