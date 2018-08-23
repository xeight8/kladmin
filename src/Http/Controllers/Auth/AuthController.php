<?php

namespace Xeight8\Kladmin\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class AuthController extends Controller
{
    public function login()
    {
    	return view('kladmin::auth.login');
    }

    public function authenticate(Request $request)
    {
    	return 'welcome ' . $request->email;
    }
}
