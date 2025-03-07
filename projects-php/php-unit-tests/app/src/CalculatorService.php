<?php

declare(strict_types=1);

namespace TDD;

class CalculatorService
{

    public function __construct(
        private PrintCalculationService $printCalculationService
    ) {}

    function sum(int $x, int $y): int
    {
        return $x + $y;
    }

    function division(int $x, int $y): int
    {

        if ($x <= 0) {
            throw new \Exception("Error Processing Request", 1);
        }

        return $x / $y;
    }

    function show(int $result, string $type): string|array
    {

        if ($type === 'array') {
            return $this->printCalculationService->array($result);
        }

        if ($type === 'print') {
            return $this->printCalculationService->print($result);
        }

        throw new \Exception("Error Processing Request", 1);
    }
}
