<?php
/**
 * Created by PhpStorm.
 * User: ongtimothee
 * Date: 2019-03-26
 * Time: 16:34
 */

class OpenDoorState extends AbstractDoorState
{
    public function close(): DoorState
    {
        return new ClosedDoorState();
    }
}
