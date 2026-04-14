<?php

require_once "Character.php";
require_once "AttackMove.php";

class Knight extends Character implements AttackMove {
    public function attack():void {
        echo "The Knight attacks the enemy.\n";
    }
}