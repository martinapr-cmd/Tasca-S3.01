<?php

require_once "classes/Character.php";
require_once "classes/Ghost.php";
require_once "classes/Knight.php";
require_once "classes/MoveMove.php";
require_once "classes/AttackMove.php";
require_once "classes/Combat.php";

$knight = new Knight();
$ghost = new Ghost();

$combat = new Combat();

$combat->doCombat($knight);
$ghost->move();