<?php

namespace Creational;

echo '### FACTORY PATTERN ### ' . PHP_EOL;

class User
{
    private int $id;
    private string $firstName;

    public function setId(int $id): User
    {
        $this->id = $id;
        return $this;
    }


    public function getId(): int
    {
        return $this->id;
    }


    public function setFirstName(string $firstName): User
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }
}


class UserFactory
{

    public function __construct(
        private int $id,
        private string $firstName
    ) {
    }

    public function create(): User
    {
        return (new User())
            ->setId($this->id)
            ->setFirstName(strtolower($this->firstName));
    }
}

$user1 = (new UserFactory(time(), 'JhOn Cena'))->create();
echo 'ID - ' . $user1->getId() . 'NAME - ' . $user1->getFirstName() . PHP_EOL;

$user2 = (new UserFactory(time(), 'UNDERTAKER'))->create();
echo 'ID - ' . $user2->getId() . 'NAME - ' . $user2->getFirstName() . PHP_EOL;

echo '### OTHER IMPLEMENTATION FACTORY PATTERN ### ' . PHP_EOL;

interface CarFactory
{
    public function create(): Car;
}

interface Car
{
    public function getType(): string;
}

class SedanFactory implements CarFactory
{
    public function create(): Car
    {
        return new Sedan();
    }
}

class Sedan implements Car
{
    public function getType(): string
    {
        return 'Sedan';
    }
}

$car = (new SedanFactory())->create();
echo 'TYPE - ' . $car->getType() . PHP_EOL;
