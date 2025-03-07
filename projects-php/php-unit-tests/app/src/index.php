<?php
include 'Receipt.php';
include 'Formatter.php';

use TDD\Formatter;
use TDD\Receipt;


$receipts = new Receipt(new Formatter);

$receipts->subTotal([1, 20, 25], null);



var_dump($receipts);
