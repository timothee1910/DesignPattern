<?php
/**
 * Created by PhpStorm.
 * User: ongtimothee
 * Date: 2019-03-26
 * Time: 17:46
 */

class Humidity
{
    private $humidity;

    public function __construct(float $humidity)
    {
        if ($humidity < 0) {
            throw new \InvalidArgumentException('Unsupported currency.');
        }
        $this->humidity = $humidity;
    }

    public function getHumidity(): float
    {
        return $this->$humidity;
    }
}