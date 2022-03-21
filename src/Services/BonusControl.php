<?php

namespace Poo\Bank\Services;

use Poo\Bank\Models\Employee\Employee;

class BonusControl
{
    private float $bonus = 0;

    public function addBonus(Employee $employee)
    {
        $this->bonus += $employee->calculateBonus();
    }

    public function getBonus(): float
    {
        return $this->bonus;
    }
}