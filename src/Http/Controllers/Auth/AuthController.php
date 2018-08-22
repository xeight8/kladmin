<?php

namespace Xeight8\Kladmin\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
