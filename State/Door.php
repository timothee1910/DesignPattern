<?php
/**
 * Created by PhpStorm.
 * User: ongtimothee
 * Date: 2019-03-26
 * Time: 16:01
 */

class Door
{
    private $state;

    public function __construct(DoorState $initialState)
    {
        $this->state = $initialState;
    }

    public function close(): void
    {
        $this->state = $this->state->close();
    }

    public function open(): void
    {
        $this->state = $this->state->open();
    }

    public function lock(): void
    {
        $this->state = $this->state->lock();
    }

    public function unlock(): void
    {
        $this->state = $this->state->unlock();
    }

    public function isOpen(): bool
    {
        return $this->state instanceof OpenDoorState;
    }

    public function isClosed(): bool
    {
        return $this->state instanceof ClosedDoorState;
    }

    public function isLocked(): bool
    {
        return $this->state instanceof LockedDoorState;
    }

}

$door = new Door(new OpenDoorState());
echo "Door is open\n";
$door->close();
echo "Door is closed\n";
$door->lock();
echo "Door is locked\n";
$door->unlock();
echo "Door is closed\n";
$door->open();
echo "Door is open\n";