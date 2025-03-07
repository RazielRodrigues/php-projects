<?php

echo '<h1> Attributes: </h1> <hr>';

# null
$null = null;

# bool
$bool = TRUE; # ou 1 ou 2

# integer
$int = 1234; // decimal number
$int = 0123; // octal number (equivalent to 83 decimal)
$int = 0o123; // octal number (as of PHP 8.1.0)
$int = 0x1A; // hexadecimal number (equivalent to 26 decimal)
$int = 0b11111111; // binary number (equivalent to 255 decimal)
$int = 1_234_567; // decimal number (as of PHP 7.4.0)

# float (floating-point number) pode ser levado ao NaN
$float = 1.234;
$float = 1.2e3;
$float = 7E-10;
$float = 1_234.567; // as of PHP 7.4.0

# string (single quote)
echo 'this is a simple string';

echo 'You can also have embedded newlines in
strings this way as it is
okay to do';

// Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\\*.*?';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\*.*?';

// Outputs: This will not expand: \n a newline
echo 'This will not expand: \n a newline';

// Outputs: Variables do not $expand $either
echo 'Variables do not $expand $either';

# double quoted


# heredoc

// no indentation
echo <<<END
      a
     b
    c
\n
END;

// 4 spaces of indentation
echo <<<END
      a
     b
    c
    END;

$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;

/* More complex example, with variables. */
class foo
{
    var $foo;
    var $bar;

    function __construct()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

echo <<<EOT
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41
EOT;

// Static variables
function foo4()
{
    static $bar = <<<LABEL
Nothing in here...
LABEL;
}

// Class properties/constants
class foo2
{
    const BAR = <<<FOOBAR
Constant example
FOOBAR;

    public $baz = <<<FOOBAR
Property example
FOOBAR;
}

# Example #12 Nowdoc string quoting example

echo <<<'EOD'
Example of string spanning multiple lines
using nowdoc syntax. Backslashes are always treated literally,
e.g. \\ and \'.
EOD;

# Example #variables parsing
$juice = "apple";
echo "He drank some $juice juice." . PHP_EOL;
// Unintended. "s" is a valid character for a variable name, so this refers to $juices, not $juice.
/* echo "He drank some juice made of $juices." . PHP_EOL;
 */// Explicitly specify the end of the variable name by enclosing the reference in braces.
echo "He drank some juice made of {$juice}s.";




# Arrays

$array = [];
$array = array();
$array = new ArrayObject();

$destruct = ['test', 'key'];

[$test, $key] = $destruct;

$destructAssociative = [ 'nome' => 'raziel'];

['nome' => $meuNome] = $destructAssociative;

echo 'Teste <hr>';
echo $test;
echo $key;
echo $meuNome;

$arrayUnpacking = [...$destructAssociative, ...$destruct];
var_dump($arrayUnpacking);

echo '<hr>';

$ponteiro = [1,2,3];

$array5 = &$ponteiro;

$ponteiro[] = 'ola';


var_dump($array5);


# objects

class foo12
{
    function do_foo()
    {
        echo "Doing foo.";
    }
}

$bar = new foo12;
echo $bar->do_foo();



# enum

enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

function do_stuff(Suit $s)
{
    // ...
}

do_stuff(Suit::Spades);


# Callbacks

class MarchaNaBoneca {

    public function marchando()
    {
        echo 'marchando...';
    }


    public static function marchandoStatic()
    {
        echo 'marchando...';
    }
}
    function alone() : mixed
    {
        echo 'marchando...';
        return false or new MarchaNaBoneca();
    }
call_user_func(['MarchaNaBoneca', 'marchandoStatic']);
call_user_func([(new MarchaNaBoneca()), 'marchandoStatic']);
call_user_func([(new MarchaNaBoneca()), 'marchando']);

call_user_func('alone');


# about mixed

# The mixed type accepts every value. It is equivalent to the union type object|resource|array|string|float|int|bool|null. Available as of PHP 8.0.0.


# about void

# void is a return-only type declaration indicating the function does not return a value, but the function may still terminate. Therefore, it cannot be part of a union type declaration. Available as of PHP 7.1.0.

# about never

# never is a return-only type indicating the function does not terminate. This means that it either calls exit(), throws an exception, or is an infinite loop. Therefore, it cannot be part of a union type declaration. Available as of PHP 8.1.0.
# never is, in type theory parlance, the bottom type. Meaning it is the subtype of every other type and can replace any other return type during inheritance.




function neverSay():never
{

    echo 'Nobody can stop me!';
    exit;
}

function a(): never
{
    throw new Exception('WTF this guy wont die?');
}



try {
    a();
} catch (Exception $th) {
    echo $th->getMessage();
}

# Relative class types self ¶ parent ¶ static ¶

# Value types ¶ Value types are those which not only check the type of a value but also the value itself. PHP has support for two value types: false as of PHP 8.0.0, and true as of PHP 8.2.0.

# Iterables ¶ Iterable is a built-in compile time type alias for array|Traversable. From its introduction in PHP 7.1.0 and prior to PHP 8.2.0, iterable was a built-in pseudo-type that acted as the aforementioned type alias and can be used as a type declaration. An iterable type can be used in foreach and with yield from within a generator.

# about declare(strict_types=1);

# em arquivos que nao se usa quando 


# Note:

# Strict typing applies to function calls made from within the file with strict typing enabled, not to the functions declared within that file. If a file without strict typing enabled makes a call to a function that was defined in a file with strict typing, the caller's preference (coercive typing) will be respected, and the value will be coerced.


function sum(int $a, int $b)
{
    return $a + $b;
}

var_dump(sum(1, 2));
var_dump(sum(1.5, 2.5));



