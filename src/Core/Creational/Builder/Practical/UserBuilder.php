<?php

namespace Core\Creational\Builder\Practical;

use Core\Creational\Builder\Practical\Enums\Role;

class UserBuilder implements UserInterface {
    private ?User $user = null;

    public function __construct() {
        $this->reset();
    }

    public function reset(): void {
        $this->user = null;
    }

    public function addBasicInfo(
        string $firstName,
        string $lastName,
        string $email,
        int $age,
        Role $role,
        bool $active = false
    ): UserInterface {
        $this->user = new User(
            firstName: $firstName,
            lastName: $lastName,
            email: $email,
            age: $age,
            role: $role,
        );

        return $this;
    }

    public function addAddress(
        string $street,
        string $city,
        string $state,
        int $postalCode,
        string $country
    ): UserInterface {
        $address = new Address(
            street: $street,
            city: $city,
            state: $state,
            postalCode: $postalCode,
            country: $country,
        );

        $this->user->setAddress($address);

        return $this;
    }

    public function addPhone(
        int $ddd,
        int $number,
        bool $active = true,
    ): UserInterface {
        $this->user->setPhone(new Phone(
            ddd: $ddd,
            number: $number,
        ));

        return $this;
    }

    public function build(): User {
        return $this->user;
    }
}