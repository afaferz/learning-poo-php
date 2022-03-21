<?php

namespace Poo\Bank\Models\Employee;

use Poo\Bank\Models\Authenticable;

class Director extends Employee implements Authenticable
{
    public function calculateBonus(): float
    {
        return $this->getSalary() * 2;
    }

    public function canAuth(string $password): bool
    {
        return $password === 'admin';
    }
}