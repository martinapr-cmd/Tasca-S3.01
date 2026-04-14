<?php

require_once "MoveMove.php";

class Character implements MoveMove 
{
    public function move(): void
    {
        echo "The character moves forward.\n";
    }

}