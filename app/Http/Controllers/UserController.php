<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        return view('users.show');
    }

    public function edit()
    {
        return view('users.edit');
    }

    public function update()
    {

    }
}
