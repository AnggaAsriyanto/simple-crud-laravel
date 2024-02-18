<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request) {
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:20'],
            'email' => ['required', 'email', 'min:3'],
            'password' => ['required', 'min:5', 'max:200']
        ]);
        return 'Thank you for registering!';
    }
}
