<?php

namespace Classes\Exceptions;

class User {
    function __construct(public string $username, public string $password) 
    {

    }

    function verified(): bool
    {
        return false;   
    }
}