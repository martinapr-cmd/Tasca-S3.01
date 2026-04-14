<?php

require_once "AttackMove.php";

class Combat {

function doCombat(AttackMove $knight)
{
    $knight->attack(); 
}

}