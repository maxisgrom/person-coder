<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 01.12.17
 * Time: 14:10
 */

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