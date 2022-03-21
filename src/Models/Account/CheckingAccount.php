<?php

namespace Poo\Bank\Models\Account;

class CheckingAccount extends Account
{
    protected function tax(): float
    {
        return 0.05;
    }
}
