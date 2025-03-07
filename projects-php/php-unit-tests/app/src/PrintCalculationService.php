<?php

declare(strict_types=1);

namespace TDD;

class PrintCalculationService
{
    
    function array(int $result ): array
    {

        # a lot of business rules...

        return [
            'result' => $result
        ];
    }

    function print(int $result): string
    {

        # a lot of business rules...

        return 'result: ' . $result;
    }

}
