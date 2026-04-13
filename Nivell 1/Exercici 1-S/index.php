<?php

require_once "classes/OlympicGames.php";
require_once "classes/Athlete.php";
require_once "classes/Result.php";
require_once "classes/PrintResults.php";
require_once "classes/Event.php";

//olimpic game list
$olympicGames = new OlympicGames();

//events
$swimming = new Event("Swimming", "2022-06-03");
$sprint = new Event("150m Sprinting", "2021-09-02");

$olympicGames->addEvent($sprint);
$olympicGames->addEvent($swimming);

//athletes
$a1 = new Athlete("John Johnson", "USA");
$a2 = new Athlete("Enrique Cardamon", "Spain");

$olympicGames->addAthlete($a1);
$olympicGames->addAthlete($a2);

//results
$r1 = new Result($a1, $sprint, "Gold");
$r2 = new Result($a2, $swimming, "Silver");

$olympicGames->addResult($r1);
$olympicGames->addResult($r2);

//print results 
$p = new PrintResults();
$p->printResults($olympicGames);


