<?php

require_once "OlympicGames.php";

class PrintResults {
    
    public function printResults(OlympicGames $games): void {
        echo "Olympic Games Results:\n";

        foreach ($games->getEvents() as $event) {
            echo "Event: {$event->getName()} / {$event->getDate()}\n";

            $results = $games->getEventsResults($event);

            foreach ($results as $result) {
                $athlete = $result->getAthlete();
                echo "- {$athlete->getName()} ({$athlete->getCountry()}) won medal {$result->getMedal()}\n";
            }
        }
    }
}
