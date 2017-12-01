<?php
namespace Domain\Interfaces;

use Domain\Person;

interface ButlerContract {
    public function checkAwake(Person $person) : bool;
}