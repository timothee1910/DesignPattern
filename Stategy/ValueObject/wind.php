<?php
/**
 * Created by PhpStorm.
 * User: ongtimothee
 * Date: 2019-03-26
 * Time: 17:26
 */

class wind
{
    private $wind;

    public function __construct(float $wind)
    {
        if ($wind < 0) {
        throw new \InvalidArgumentException('Unsupported currency.');
    }
        $this->wind = $wind;
    }

    public function getWind(): float
    {
        return $this->$wind;
    }
}