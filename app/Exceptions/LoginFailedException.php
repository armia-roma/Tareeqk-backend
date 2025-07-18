<?php

namespace App\Exceptions;

use Exception;

class LoginFailedException extends Exception
{
    //
    protected $message = 'Login failed due to invalid credentials.';
    protected $code = 401;
}
