<?php

declare(strict_types=1);

namespace src\service;

include_once './service/NIFValidationServiceInterface.php';

use DOMDocument;
use src\service\NIFValidationServiceInterface;


/**
 * Do the verification of NIF
 * 
 * @autor <Raziel Rodrigues> razielx3@live.com
 */
class NIFValidationService implements NIFValidationServiceInterface
{

    /**
     * Hold all types of NIF based in the first two numbers
     */
    private array $NIFtypes = [
        '1' => 'pessoa singular',
        '2' => 'pessoa singular',
        '3' => 'pessoa singular',
        '5' => 'pessoa colectiva',
        '6' => 'administração ',
        '8' => 'empresário em nome individual (extinto)',
        '45' => 'pessoa singular não residente',
        '70' => 'herança indivisa',
        '71' => 'pessoa colectiva não residente',
        '72' => 'fundos de investimento',
        '77' => 'atribuição oficiosa',
        '79' => 'regime excepcional',
        '90' => 'condominios e sociedades irregulares',
        '91' => 'condominios e sociedades irregulares',
        '98' => 'não residentes',
        '99' => 'sociedades civis'
    ];

    public function __construct(private string $nif)
    {
    }

    /**
     * Check if NIF is following the rules
     *
     * @return bool
     */
    public function validate(): bool
    {
        if (strlen($this->nif) < 9 || !is_numeric($this->nif)) {
            return false;
        }

        $NIFdigits = str_split($this->nif);

        $lastDigit = end($NIFdigits);
        if ($lastDigit == 0) {
            $lastDigit = 11;
        }

        $mustBeEqual = $this->calculateNIF();

        return $lastDigit == $mustBeEqual;
    }

    /**
     * Do a call inside NIF.PT website
     *
     * @return string
     */
    public function validateOnline(): string
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.nif.pt/{$this->nif}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        $dom = new DOMDocument;
        $dom->loadHTML($response);

        foreach ($dom->getElementsByTagName('div') as $node) {
            $nifOnlineInfo[] = $dom->saveHTML($node);
        }

        curl_close($ch);

        return $nifOnlineInfo[9] ?? '';
    }

    /**
     * Do the calc to match NIF rules
     *
     * @return int
     */
    public function calculateNIF(): int
    {
        $sum = 0;
        $factorial = 9;
        $digits = str_split($this->nif);

        array_pop($digits);

        foreach ($digits as $digit) {
            $sum += $digit * $factorial;
            $factorial--;
        }

        $module = $sum % 11;

        $mustBeEqual = 0;
        if ($module !== 1 || $module !== 0) {
            $mustBeEqual = 11 - $module;
        }

        return $mustBeEqual;
    }

    /**
     * Return the type of nif based on the two first numbers
     *
     * @return string
     */
    public function getNIFtype(): string
    {
        $normalPersonDigit = substr($this->nif, 0, 1);
        $businessDigit = substr($this->nif, 0, 2);
        return $this->NIFtypes[$normalPersonDigit] ?? $this->NIFtypes[$businessDigit];
    }
}
