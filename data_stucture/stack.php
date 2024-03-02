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

 class Stack {
    public $top;
    public $height;

    function __construct($value)
    {
        $newNode = new Node($value);
        $this->top = $newNode;
        $this->height = 1;
    }

    function printStack() {
        $temp = $this->top;
        while($temp != null) {
            echo $temp->value."\n";
            $temp = $temp->nextNode;
        }
    }

    function push($value) {
        $newNode = new Node($value);
        if($this->top == null){
            $this->top = $newNode;
        } else {
            $newNode->nextNode = $this->top;     
        }
        $this->height++;
    }

    function pop() {
        if($this->height === 0) {
            return 'null';
        }else {
            $removed = $this->top;
            $removed->nextNode = null;
            $this->top = $this->top->nextNode;
            $this->height--;
            return $removed;
        }
    }
 }

//  In PHP, built-in functions like array_push and array_pop can be used to implement a stack using an array data structure.
// $stack = [];
// array_push($stack, 'youtube.com');
// array_push($stack, 'google.com');
// array_push($stack, 'gmail.com');
// array_pop($stack);
