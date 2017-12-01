<?php
namespace Domain;

class Butler {

    private $name;

    public function __construct($name) {

        $this->name = $name;
    }

    public function checkAwake(Person $person) : bool {
        return is_a($person->state(), PersonAwakeState::class) ? true : false;
    }
}