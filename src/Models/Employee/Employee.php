<?php

namespace Poo\Bank\Models\Employee;

use Poo\Bank\Models\Person;

abstract class Employee extends Person
{
    private float $salary;

    public function __construct(string $name, string $cpf, float $salary)
    {
        parent::__construct($name, $cpf);
        $this->salary = $salary;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function salaryReadjustment(float $value): void
    {
        if ($value < 0) {
            echo "Invalid value";
            return;
        }

        $this->salary += $value;
    }

    protected function getSalary(): float
    {
        return $this->salary;
    }
    
    abstract public function calculateBonus(): float;
}
