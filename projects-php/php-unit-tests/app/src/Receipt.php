<?php

namespace TDD;

class Receipt
{

    public $tax = 0;
    public $Formatter;

    public function __construct($formatter)
    {
        $this->Formatter = $formatter;
    }

    public function subTotal(array $items = [], $coupun)
    {
        $sum = array_sum($items);
        if (!is_null($coupun)) {

            if ($coupun > 1.00) {
                throw new \BadMethodCallException("Must be lower than 1.00 or equal");
            }

            return $sum - ($sum * $coupun);
        }
        return $sum;
    }

    public function tax($amount)
    {
        return $this->Formatter->currencyAmt($amount * $this->tax);
    }

    public function postTaxSubTotal($valores, $coupun)
    {
        $subtotal = $this->subTotal($valores, $coupun);
        return $subtotal + $this->tax($subtotal, $this->tax);
    }
}
