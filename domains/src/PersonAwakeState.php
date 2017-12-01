<?php
namespace Domain;

use Domain\Interfaces\PersonState;
use Exception;

// Бодрствование
class PersonAwakeState implements PersonState {

    public function awake(Person $person) {
        throw new Exception('Not allowed\n');
    }

    public function asleep(Person $person) {
        echo "Person is going asleep. Zzz\n";
        return new PersonAsleepState();
    }
}

