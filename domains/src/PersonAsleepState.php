<?php
namespace Domain;

use Domain\Interfaces\PersonState;
use Exception;

// Сон
class PersonAsleepState implements PersonState {

    public function awake(Person $person) {
        echo "Person is going awake! Wazap!\n";
        return new PersonAwakeState();
    }

    public function asleep(Person $person) {
        throw new Exception('Not allowed\n');
    }
}