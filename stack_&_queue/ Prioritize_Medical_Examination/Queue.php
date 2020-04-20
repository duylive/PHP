<?php

class Queue
{
    public $limit;
    public $queue;

    public function __construct($queue, $limit)
    {
        if (is_array($queue)) {
            $this->queue = $queue;
        } else {
            $this->queue = [];
        }
        if (is_integer($limit)) {
            $this->limit = $limit;
        } else {
            $this->limit = 5;
        }
    }

    public function isEmpty()
    {
        return empty($this->queue);
    }

    public function enqueue($patient) {
        $person = ["name" => $patient->name, "code" => $patient->code];
        if (count($this->queue) < $this->limit) {
            array_push($this->queue, $person);
        } else {
            echo "Queue limit";
        }
    }

    public function dequeue() {
        return array_shift($this->queue);
    }

    public function __toString()
    {
        return implode(",", $this->queue);
    }

    public function getQueue() {
        return $this->queue;
    }

    public function sort() {
        asort($this->queue);
    }
}
