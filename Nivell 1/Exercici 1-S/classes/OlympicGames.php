<?php

require_once "Athlete.php";
require_once "Event.php";
require_once "Result.php";


class OlympicGames {

    private array $athletes = [];
    private array $events = [];
    private array $results = [];

 public function __construct() {
    $this->athletes = [];
    $this->events = [];
    $this->results = [];
}

    public function addAthlete(Athlete $athlete): void {
        $this->athletes[] = $athlete;
    }

    public function addEvent(Event $event): void {
        $this->events[] = $event;
    }

    public function addResult(Result $result): void {
        $this->results[] = $result;
    }

    public function getAthletes(): array { return $this->athletes; }
    public function getEvents(): array { return $this->events; }
    public function getResults(): array { return $this->results; }

        public function getEventsResults(Event $event): array {
            $list = [];

            foreach ($this->results as $result) {
                if ($result->getEvent()->getName() === $event->getName()) {
                    $list[] = $result;
                }
            }   return $list;
        }

}
