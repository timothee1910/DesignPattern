<?php
use InvalidDoorStateOperation;

abstract class AbstractDoorState implements DoorState
{
    public function close(): DoorState {
        throw InvalidDoorStateOperation::doorCannotBeClosed($this->getCurrentState()); }
    public function open(): DoorState {
        throw InvalidDoorStateOperation::doorCannotBeOpen($this->getCurrentState());
    }
    public function lock(): DoorState {
        throw InvalidDoorStateOperation::doorCannotBeLocked($this->getCurrentState());
    }
    public function unlock(): DoorState {
        throw InvalidDoorStateOperation::doorCannotBeUnlocked($this->getCurrentState());
    }
    private function getCurrentState(): string {
        $class = get_class($this);
        return strtolower(substr($class, 0, strlen($class) - 9));
    }
}