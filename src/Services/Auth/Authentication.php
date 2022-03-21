<?php

namespace Poo\Bank\Services\Auth;

use Poo\Bank\Models\Authenticable;

class Authentication
{
    public function login(Authenticable $authenticable, string $password): bool
    {
        if(!$authenticable->canAuth($password)) {
            echo "Can not loggin";
            return false;
        } else {
            echo "Logged in";
            return true;
        }
    }
}
