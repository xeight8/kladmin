<?php

namespace Xeight8\Kladmin\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login()
    {
    	return view('kladmin::auth.login');
    }
}
