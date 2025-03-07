<?php

namespace TDD;

class Formatter
{
    public function currencyAmt($input)
    {
        return round($input, 2);
    }
}
