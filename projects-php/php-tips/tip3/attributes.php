<?php

echo '<h1> Attributes: </h1> <hr>';

#[Attribute]
class Route
{
    public function __construct($nome)
    {
    }
}

#[Route('/home')]
class HomeController
{
}

$reflector = new \ReflectionClass(HomeController::class);
$attrs = $reflector->getAttributes();

foreach ($attrs as $attriubute) {
    var_dump($attriubute->getName());
    var_dump($attriubute->getArguments());
    var_dump($attriubute->getTarget());
    var_dump($attriubute->newInstance());
}
