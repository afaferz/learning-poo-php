<?php

namespace Poo\Bank\Models;

use Poo\Bank\Traits\GetterProps;

abstract class Person
{

    use GetterProps;
    protected $name;
    protected $cpf;

    public function __construct(string $name, string $cpf)
    {
        $this->name = $name;
        $this->validCpf($cpf);
        $this->cpf = $cpf;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    final protected function validCpf(string $cpf): bool
    {
        $cpf = preg_replace("/[^0-9]/", "", $cpf);
        if (strlen($cpf) != 11) {
            echo "CPF inválido";
            return false;
        }
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            echo "CPF inválido";
            return false;
        }

        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }

        return true;
    }
}
