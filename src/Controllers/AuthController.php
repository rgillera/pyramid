<?php

namespace Vqpoint\Pyramid\Controllers;

use Vqpoint\Pyramid\Controllers\ApiController;

class AuthController extends ApiController
{
    public function login()
    {
        return 'Login Page';
    }

    public function register()
    {
        return 'Registration page';
    }

    public function reset()
    {
        return 'Reset Page';
    }
}
