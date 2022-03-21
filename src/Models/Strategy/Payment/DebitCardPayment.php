<?php

namespace Poo\Bank\Models\Strategy\Payment;

use Poo\Bank\Models\Strategy\Payment\PaymentMethod;

class DebitCardPayment implements PaymentMethod
{
    public const DISCOUNT_PERCENT = 0.05;
    public function pay(float $value): float
    {
        return $value - ($value * self::DISCOUNT_PERCENT);
    }
}