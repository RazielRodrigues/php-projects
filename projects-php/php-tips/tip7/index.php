<?php

# Object Calisthenics
# https://theswissbay.ch/pdf/Gentoomen%20Library/Programming/Pragmatic%20Programmers/The%20ThoughtWorks%20Anthology.pdf

# The Rules

# 1. Use only one level of indentation per method.
# 2. Don’t use the else keyword.
# 3. Wrap all primitives and strings.
# 4. Use only one dot per line.
# 5. Don’t abbreviate.
# 6. Keep all entities small.
# 7. Don’t use any classes with more than two instance variables.
# 8. Use first-class collections.
# 9. Don’t use any getters/setters/properties.

# 1. Use only one level of indentation per method. 
# it keeps more readable and helpful to understand what is happening, use the extract method stategy to achive that.

# Wrong
function moreIdentationFunction()
{
    $counter = [];
    for ($i = 0; $i < 10; $i++) { # level zero
        $counter[] = $i;

        foreach ($counter as $value) { # level one

            if ($value == 5) { # level two
                continue;
            }

            $counter[$value] = $value . ' result';
        }
    }
}

# Correct
function lessIdentationFunction()
{
    $counter = [];

    for ($i = 0; $i < 10; $i++) { # level zero
        $counter[] = $i;
        $counter = generateResult($counter);
    }
}

function generateResult($counter)
{
    foreach ($counter as $value) { # level zero

        if ($value == 5) { # level one
            continue;
        }

        $counter[$value] = $value . ' result';
    }

    return $counter;
}

# 2. Don’t use the else keyword. 
# Most of cases you could avoid the else keyword when you adapt your algorithm.

function dontUseElse($age)
{
    # Wrong
    if ($age < 18) {
        echo 'Under 18';
    } else {
        echo 'Over 18';
    }

    # Correct
    if ($age < 18) {
        echo 'Under 18';
    }

    echo 'Over 18';
}

# 3. Wrap all primitives and strings.
# Creating a class that encapsulates and provides a consistent interface for working with primitive values and strings.

class WrapAllPrimitives
{
    private $value;

    public function __construct($value)
    {
        if (!is_string($value) || !is_numeric($value) || !is_bool($value)) {
            throw new InvalidArgumentException('Value must be a string, number or boolean');
        }

        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}

$stringWrapper = new WrapAllPrimitives('Hello, world!');
echo $stringWrapper->getValue();  // Outputs: Hello, world!

$numberWrapper = new WrapAllPrimitives(42);
echo $numberWrapper->getValue();  // Outputs: 42

$boolWrapper = new WrapAllPrimitives(true);
echo $boolWrapper->getValue();  // Outputs: 1

# 4. Use only one dot per line (don't aplly in fluent API)
# Avoid the break of the open closed principle and also avoid mysterious exceptions, more easy to see on the debug stacktrace.

# Wrong
class PersonWrong
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string|object
    {
        return $this->name;
    }

    public function getFormattedName(): string|object
    {
        return strtoupper($this->name);
    }
}

$personWrong = new PersonWrong('Charlie');

// Bad Example: Chained method calls with multiple dots in one line
$personWrong->getName()->getFormattedName();

# Correct
class PersonCorrect
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class CarCorrect
{
    private $owner;

    public function __construct(PersonCorrect $owner)
    {
        $this->owner = $owner;
    }

    public function getOwnerName(): string
    {
        return $this->owner->getName();
    }
}

$personCorrect = new PersonCorrect('Alice');
$carCorrect = new CarCorrect($personCorrect);
$carCorrect->getOwnerName();

# 5. Don’t abbreviate.
# Explain what the method or the variable means, avoid redundant names on class methods.

# Wrong

$cpm = 199;

class UserWrong
{

    # people know the Add is for user so it is not a good name becaus eis redundant
    function AddUser()
    {
    }
    function DeleteUser()
    {
    }
}

# Correct

$costsPerMill = 199;

class UserCorrect
{

    # Keep the context
    function Add()
    {
    }
    function Delete()
    {
    }
}

# 6. Keep all entities small. 
# keep classes with not so long almost 50 lines

class FifityLinesForever
{

    public function __construct()
    {
        throw new Exception('Follow the rule if you want ');
    }
}


# 7. Don’t use any classes with more than two instance variables. 
# Don't use more than two variables in a class.

# Wrong
class TooMuchVariables
{

    public function __construct(
        private array $data1,
        private array $data2,
        private array $data3,
        private array $data4
    ) {
    }
}

# Correct
class OnlyTwoVariables
{

    public function __construct(
        private array $data1,
        private array $data2
    ) {
    }
}

# 8. Use first-class collections. 
# Then you could provide only the real things you want to happen with your data set.

# Wrong
class ClientCollectionWrong
{

    private array $clientsData;

    public function __construct()
    {
        $this->clientsData = [
            1 => 'Morfeu',
            2 => 'Neo'
        ];
    }

    function get($id)
    {
        return $this->clientsData[$id];
    }

    function add(string $name)
    {
        return array_push($this->clientsData, $name);
    }
}

class RenderClientWrong
{

    public function __construct(public ClientCollectionWrong $clients)
    {
    }

    function show($id)
    {
        echo $this->clients->get($id);
    }

    function insert($name)
    {
        echo $this->clients->add($name);
    }
}

$render = new RenderClientWrong((new ClientCollectionWrong));
$render->show(2);
$render->insert('Trinity');
$render->show(3);

# Correct
class ClientCollectionCorrect
{
    private array $clients;

    public function __construct()
    {
        $this->clients = [];
    }

    public function addClient(string $name): void
    {
        $this->clients[] = $name;
    }

    public function getClientById(int $id): ?string
    {
        return $this->clients[$id] ?? null;
    }

    public function getAllClients(): array
    {
        return $this->clients;
    }
}

class RenderClientCorrect
{
    private ClientCollectionCorrect $clients;

    public function __construct(ClientCollectionCorrect $clients)
    {
        $this->clients = $clients;
    }

    public function showClientById(int $id): void
    {
        $client = $this->clients->getClientById($id);
        if ($client !== null) {
            echo $client;
        }
    }

    public function insertClient(string $name): void
    {
        $this->clients->addClient($name);
    }
}

$clients = new ClientCollectionCorrect();
$clients->addClient('Morfeu');
$clients->addClient('Neo');

$render = new RenderClientCorrect($clients);
$render->showClientById(1);
$render->insertClient('Trinity');
$render->showClientById(2);

# 9. Don’t use any getters/setters/properties. 
# Use methods to do the actions for you instead of the set or get methods.

# Wrong

class WithGetAndSet
{
    private int $score;

    public function __construct(int $score)
    {
        $this->score = $score;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function setScore(int $score): void
    {
        $this->score = $score;
    }

    public function increase(): int
    {
        $this->score += 2;
        return $this->score;
    }

    public function decrease(): int
    {
        $this->score -= 2;
        return $this->score;
    }
}

# Correct
class WithouttGetAndSet
{
    private int $score;

    public function __construct(int $score)
    {
        $this->score = $score;
    }

    public function increase(): int
    {
        $this->score += 2;
        return $this->score;
    }

    public function decrease(): int
    {
        $this->score -= 2;
        return $this->score;
    }
}
