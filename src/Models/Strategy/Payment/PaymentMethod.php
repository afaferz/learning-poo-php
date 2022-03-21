<?php

namespace Poo\Bank\Models\Strategy\Payment;

interface PaymentMethod
{
    public function pay(float $value): float;
}