<?php

final class country
{
    private $temperature;
    private $wind;
    private $country;

    public function __construct(string $country, \temperature $temperature, \wind $wind)
    {
        if (!in_array($country, ['London', 'Paris', 'Berlin'], true)) {
            throw new \InvalidArgumentException('Unsupported currency.');
        }
        $this->country = $country;
        $this->temperature = $temperature;
        $this->wind = $wind;

    }


    public function equals(self $other): bool
    {
        return $this->country === $other->country;
    }

}