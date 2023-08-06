<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

class AuthController extends Controller
{
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
