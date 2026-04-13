<?php

require_once 'classes/ElectricHeater.php';
require_once 'classes/WashingMachine.php';
require_once 'classes/Coolable.php';
require_once 'classes/Heatable.php';
require_once 'classes/Switchable.php';
require_once 'classes/Washable.php';

$heater = new ElectricHeater();
$washer = new WashingMachine();

$heater->turnOn();
$heater->heat();
$heater->turnOff();

echo "\n";

$washer->turnOn();
$washer->wash();
$washer->turnOff();


?>