<?php

namespace Poo\Bank\Models\Strategy\Payment;

use Poo\Bank\Models\Strategy\Payment\PaymentMethod;

final class PaymentProcessor
{
    private PaymentMethod $paymentMethod;
    private float $value;

    public function __construct(PaymentMethod $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function processPayment(float $value): void
    {
        $this->value = $this->paymentMethod->pay($value);
    }

    public function getValue(): float
    {
        return $this->value;
    }
}