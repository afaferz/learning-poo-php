<?php

namespace Poo\Bank\Models;

use Poo\Bank\Traits\GetterProps;

final class Address
{
    use GetterProps;

    private string $cep;
    private string $city;
    private string $state;
    private string $distric;
    private string $publicPlace;
    private string $number;

    public function __construct(
        string $cep,
        string $city,
        string $state,
        string $distric,
        string $publicPlace,
        string $number
    ) {
        $this->cep = $cep;
        $this->city = $city;
        $this->state = $state;
        $this->distric = $distric;
        $this->publicPlace = $publicPlace;
        $this->number = $number;
    }

    public function getCep(): string
    {
        return $this->cep;
    }
    public function setCep(string $value): void
    {
        $this->cep = $value;
    }

    public function getCity(): string
    {
        return $this->city;
    }
    public function setCity(string $value): void
    {
        $this->city = $value;
    }

    public function getState(): string
    {
        return $this->state;
    }
    public function setState(string $value): void
    {
        $this->state = $value;
    }

    public function getDistrict(): string
    {
        return $this->distric;
    }
    public function setDistrict(string $value): void
    {
        $this->district = $value;
    }

    public function getPublicPlace(): string
    {
        return $this->publicPlace;
    }
    public function setPublicPlace(string $value): void
    {
        $this->publicPlace = $value;
    }

    public function getNumber(): string
    {
        return $this->number;
    }
    public function setNumber(string $value): void
    {
        $this->number = $value;
    }

    public function getFullAddress(): array
    {
        $address = [
            "cep" => $this->cep,
            "city" => $this->city,
            "state" => $this->state,
            "distric" => $this->distric,
            "public_place" => $this->publicPlace,
            "number" => $this->number
        ];

        return $address;
    }

    public function __toString(): string
    {
        return "{$this->cep}, {$this->city}, {$this->state}, {$this->district}, {$this->publicPlace}, {$this->number}";
    }

    public function __set(string $attr, string $value): void
    {
        $method = 'set' . ucfirst($attr);
        $this->$method($value);
    }
}
