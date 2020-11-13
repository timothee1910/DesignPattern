<?php

use Door;

class DoorResponse
{
    private $state = 'close';

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }


}