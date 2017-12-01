<?php
namespace Domain\Interfaces;

use Domain\Program;
use Domain\Task;

interface PersonContract {
    public function code(Task $task) : Program;
}