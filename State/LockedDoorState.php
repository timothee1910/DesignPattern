<?php
/**
 * Created by PhpStorm.
 * User: ongtimothee
 * Date: 2019-03-26
 * Time: 16:35
 */

class LockedDoorState extends AbstractDoorState
{
    public function unlock(): DoorState
    {
        return new ClosedDoorState();
    }
}