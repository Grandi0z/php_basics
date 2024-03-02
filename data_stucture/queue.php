<?php
class Node {
    public $value;
    public $nextNode;

    function __construct($value)
    {
        $this->value = $value;
        $this->nextNode = null;
    }
}

class Queue {
    public $first;
    public $last;
    public $length;

    function __construct($value){
        $newNode = new Node($value);
        $this->first = $newNode;
        $this->last = $newNode;
        $this->length =1;
    }

    function printQueue() {
        $temp = $this->first;
        while($temp != null) {
            echo $temp->value.'\n';
            $temp = $temp->nextNode;
        }
    }

    function enqueue ($value) {
        $newNode = new Node($value);
        if($this->length == 0) {
            $this->first = $newNode;
            $this->last = $newNode;
        } else {
            $this->last->nextNode = $newNode;
            $this->last = $newNode;
        }
        $this->length++;
    }

    function dequeue () {
        if($this->length === 0) {
            return null;
        } 
        $removed = $this->first;
    }
}