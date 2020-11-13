<?php
/**
 * Created by PhpStorm.
 * User: ongtimothee
 * Date: 2019-03-26
 * Time: 16:35
 */

class ClosedDoorState extends AbstractDoorState
{
    public function open(): DoorState
    {
        return new OpenDoorState();
    }

    public function lock(): DoorState
    {
        return new LockedDoorState();
    }
}
