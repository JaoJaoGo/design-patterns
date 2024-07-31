<?php

namespace Core\Creational\Builder\Practical;

use Core\Creational\Builder\Practical\Enums\Role;

interface UserInterface {
    public function reset(): void;
    
    public function addBasicInfo(
        string $firstName,
        string $lastName,
        string $email,
        int $age,
        Role $role,
        bool $active = false,
    ): UserInterface;

    public function addAddress(
        string $street,
        string $city,
        string $state,
        int $postalCode,
        string $country,
    ): UserInterface;

    public function addPhone(
        int $ddd,
        int $number,
        bool $active = true,
    ): UserInterface;

    public function build(): User;
}