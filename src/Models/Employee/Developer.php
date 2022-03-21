<?php

namespace Poo\Bank\Models\Employee;

class Developer extends Employee
{
    public function calculateBonus(): float
    {
        return $this->getSalary() + 500;
    }

    public function promotion(): void
    {
        $baseSalary = $this->getSalary();
        $readjustPercentage = 0.75;

        $this->salaryReadjustment($baseSalary * $readjustPercentage);
    }
}