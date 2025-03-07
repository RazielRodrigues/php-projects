<?php

class LuzSingleton {
    private static ?LuzSingleton $instance = null;
    private string $lightStatus;

    private function __construct() {
        $this->lightStatus = 'OFF';
    }

    public static function getInstance(): LuzSingleton {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Turns the light ON.
     */
    public function turnOn(): void {
        $this->lightStatus = 'ON';
        echo "Light turned {$this->lightStatus}\n";
    }

    /**
     * Turns the light OFF.
     */
    public function turnOff(): void {
        $this->lightStatus = 'OFF';
        echo "Light turned {$this->lightStatus}\n";
    }

    /**
     * Retrieves the current status of the light.
     *
     * @return string The current light status.
     */
    public function getStatus(): string {
        return $this->lightStatus;
    }
}

// Exemplo de uso
$luz = LuzSingleton::getInstance();
$luz->turnOn();
echo $luz->getStatus(); // ON

