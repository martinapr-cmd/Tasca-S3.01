<?php

require_once "Character.php";

class Ghost extends Character
{
    public function move(): void
    {
        echo "The ghost floats silently.\n";
    }

}