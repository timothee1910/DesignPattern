<?php
/**
 * Created by PhpStorm.
 * User: ongtimothee
 * Date: 2019-03-26
 * Time: 17:21
 */

class temperature
{
    private $code;

    public function __construct(float $code)
    {
        if ($code < 273.15) {
            throw new \InvalidArgumentException('Unsupported currency.');
        }
        $this->code = $code;
    }

    public function getValue(): float
    {
        return $this->code === $other->code;
    }
}