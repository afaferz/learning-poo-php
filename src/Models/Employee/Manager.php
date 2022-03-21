<?php

namespace Poo\Bank\Models\Employee;

use Poo\Bank\Models\Authenticable;

class Manager extends Employee implements Authenticable
{
    public function calculateBonus(): float
    {
        return $this->getSalary();
    }

    public function canAuth(string $password): bool
    {
        return $password === 'manager';
    }
}
