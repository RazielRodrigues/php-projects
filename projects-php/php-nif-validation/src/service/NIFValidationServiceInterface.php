<?php

declare(strict_types=1);

namespace src\service;

interface NIFValidationServiceInterface
{
    /**
     * Check if NIF is following the rules
     *
     * @return bool
     */
    function validate(): bool;

    /**
     * Do a call inside NIF.PT website
     *
     * @return string
     */
    function validateOnline(): string;

    /**
     * Do the calc to match NIF rules
     *
     * @return int
     */
    function calculateNIF(): int;

    /**
     * Return the type of nif based on the two first numbers
     *
     * @return string
     */
    function getNIFtype(): string;
}
