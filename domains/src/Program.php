<?php
namespace Domain;

class Program {

    protected $taskResult;

    public function __construct($taskResult) {
        $this->taskResult = $taskResult;
    }

    public function result() {
        return $this->taskResult ? $this->taskResult : null;
    }
}