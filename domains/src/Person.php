<?php
namespace Domain;

use Domain\Interfaces\PersonState;

class Person  {
    private $state;

    public function __construct(PersonState $personState) {
        $this->state = $personState;
    }

    public function asleep() {
        $this->state = $this->state->asleep($this);
    }

    public function awake() {
        $this->state = $this->state->awake($this);
    }

    public function state() {
        return $this->state;
    }

    public function code(Task $task) : ?Program {
        $taskResult = $task->number() * 2;
        return new Program($taskResult);
    }
}