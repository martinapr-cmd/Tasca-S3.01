<?php

require_once "classes/Play.php";
require_once "classes/InstrumentPlayer.php";
require_once "classes/Guitar.php";
require_once "classes/Drums.php";
require_once "classes/Piano.php";

$p = new InstrumentPlayer();

$p->play(new Guitar);
$p->play(new Drums);
$p->play(new Piano);