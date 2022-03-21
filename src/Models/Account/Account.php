<?php

namespace Poo\Bank\Models\Account;

abstract class Account
{
    // Def datas
    private $owner;
    private float $balance;
    private static $numbersAccount = 0;

    public function __construct(Owner $owner)
    {
        $this->owner = $owner;
        $this->balance = 0;
        self::$numbersAccount++;
    }

    public function __destruct()
    {
        self::$numbersAccount--;
    }

    public function withdraw(float $value): void
    {
        $withdrawTax = $value * $this->tax();
        $valueToWithdraw = $value + $withdrawTax;
        if ($valueToWithdraw > $this->balance) {
            echo "Insufficient funds";
            return;
        }
        $this->balance -= $valueToWithdraw;
    }

    public function deposit(float $value): void
    {
        if ($value < 0) {
            echo "Invalid value";
        }
        $this->balance += $value;
    }

    public function transfer(float $value, Account $toAccount): void
    {
        if ($value > $this->balance) {
            $this->withdraw($value);
            $toAccount->deposit($value);
        }
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    abstract protected function tax(): float;

    // private static function getNumbersAccount(): int
    // {
    //     return self::$numbersAccount;
    // }
}
