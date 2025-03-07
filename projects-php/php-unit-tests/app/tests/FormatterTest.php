<?php

namespace TDD\Test;

require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PHPUnit\Framework\TestCase;
use TDD\Formatter;


final class FormatterTest extends TestCase
{

    public $Formatter;

    public function setUp()
    {
        $this->Formatter = new Formatter();
    }

    public function tearDown()
    {
        unset($this->Formatter);
    }

    /**
     * @dataProvider provideCurrencyAmt
     */
    public function testCurrencyAmt($expected, $input, $msg)
    {
        $this->assertSame(
            $expected,
            $this->Formatter->currencyAmt($input),
            $msg
        );
    }

    public function provideCurrencyAmt()
    {
        return [
            [1.00, 1, "should be 1.00"],
            [1.11, 1.111, "should be 1.11"],
            [1.22, 1.22222, "should be 1.22"]
        ];
    }
}
