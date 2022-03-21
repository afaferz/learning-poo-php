<?php

namespace Poo\Bank\Models;

interface Authenticable
{
    public function canAuth(string $password): bool;
}