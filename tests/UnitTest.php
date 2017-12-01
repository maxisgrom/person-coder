<?php
namespace Tests;

use Domain\Butler;
use Domain\Person;
use Domain\PersonAsleepState;
use Domain\PersonAwakeState;
use Domain\Program;
use Domain\Task;
use Exception;
use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase
{
    public function testPersonState()
    {
        // Make Person
        $person = new Person(new PersonAwakeState());
        // Person go asleep
        $person->asleep();
        $this->assertInstanceOf(PersonAsleepState::class, $person->state());

        // Person go awake
        $person->awake();
        $this->assertInstanceOf(PersonAwakeState::class, $person->state());

        // Person try to go awake again
        $this->expectException(Exception::class);
        $person->awake();
    }

    public function testButlerChekin() {
        // Make Butler and Person
        $butler = new Butler('John');
        $person = new Person(new PersonAwakeState());

        // Butler check if Person is awake
        $isAwake = $butler->checkAwake($person);
        $this->assertTrue($isAwake);

        // Person go asleep
        $person->asleep();

        // Butler check if Person is awake
        $isAwake = $butler->checkAwake($person);
        $this->assertFalse($isAwake);
    }

    public function testTaskAndResultProgram() {
        // Make Person and Task
        $person = new Person(new PersonAwakeState());
        $task = new Task(3);

        // Person try to code Task [3 * 2 = 6]
        $program = $person->code($task);
        $this->assertInstanceOf(Program::class, $program);
        $this->assertEquals(6, $program->result());
    }

    public function testFailedTask() {
        // Make Person and Task
        $person = new Person(new PersonAwakeState());
        $task = new Task(0);

        // Person try to code Task [0 * 2 = null]
        $program = $person->code($task);
        $this->assertNull($program->result());
    }
}