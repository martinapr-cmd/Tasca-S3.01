<?php

require_once 'IMachineActions.php';
require_once 'Switchable.php';
require_once 'Heatable.php';
require_once 'Coolable.php';

class ElectricHeater implements Switchable, Heatable
{
    public function turnOn(): void
    {
        echo "Heater on\n";
    }

    public function turnOff(): void
    {
        echo "Heater off\n";
    }

    public function heat(): void
    {
        echo "Heating up the room!\n";
    }

    public function cool(): void {
        echo "Cooling down the room!\n";
    }



}