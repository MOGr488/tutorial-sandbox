<?php

namespace App\Http\Controllers;

use App\Models\User;

abstract class Controller
{
    public function index()
    {
        $user = new User();
        $user->name = 'John Doe';
        $user->email = '';
    }
}
