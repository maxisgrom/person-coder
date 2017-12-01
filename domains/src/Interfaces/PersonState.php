<?php
namespace Domain\Interfaces;

use Domain\Person;

interface PersonState {
    public function awake(Person $person);
    public function asleep(Person $person);
}