<?php
namespace Domain;

class Task {

    protected $number;

    public function __construct($number) {
        $this->number = $number;
    }

    public function number() {
        return $this->number;
    }
}