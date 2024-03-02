<?php

namespace Classes\static_beding;

class ParentClass 
{
    protected static string $name = 'ParentClass';

    function __construct()
    {
    }

    public static function getName(): string 
    {
        //return $this->name;
        return static::$name;
    }
}

// Php calls the parent parent's static name even if it is override 
// in child class.
// use static instead of self to avoid that