<?php

namespace Classes\Exceptions;

use Exception;

class UserNotVerifiedException extends Exception
{
    protected $message = "the user is not verified";
}