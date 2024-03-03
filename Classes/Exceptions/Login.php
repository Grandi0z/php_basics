<?php

namespace Classes\Exceptions;

class Login 
{
    function __construct(protected User $user)
    {
    }

    function login(): bool 
    {
        if(!$this->user->verified()){
            throw new UserNotVerifiedException();
        }
        return true;
    }
}