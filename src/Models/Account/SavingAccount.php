<?php

namespace Poo\Bank\Models\Account;

class SavingAccount extends Account
{
    protected function tax(): float
    {
        return 0.03;
    }
}
