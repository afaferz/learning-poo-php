<?php

namespace Poo\Bank\Models\Account;

use Poo\Bank\Models\Person;
use Poo\Bank\Models\Address;
use Poo\Bank\Models\Authenticable;

class Owner extends Person implements Authenticable
{
    public function __construct(string $name, string $cpf, Address $address)
    {
        parent::__construct($name, $cpf);
        $this->address = $address;
    }

    public function getAddress()
    {
        $this->address;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function canAuth(string $password): bool
    {
        return $password === 'user';
    }
}
