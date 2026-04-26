<?php

require_once "AttackMove.php";

class Combat {

function doCombat(AttackMove $attacker)
{
    $attacker->attack(); 
}

}