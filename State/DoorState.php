<?php
/**
 * Created by PhpStorm.
 * User: ongtimothee
 * Date: 2019-03-26
 * Time: 16:23
 */

interface DoorState
{
    public function open(): DoorState;

    public function close(): DoorState;

    public function lock(): DoorState;

    public function unlock(): DoorState;
}