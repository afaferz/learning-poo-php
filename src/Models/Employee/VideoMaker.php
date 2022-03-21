<?php

namespace Poo\Bank\Models\Employee;

class VideoMaker extends Employee
{
    public function calculateBonus(): float
    {
        return $this->getSalary() + 600;
    }
}
