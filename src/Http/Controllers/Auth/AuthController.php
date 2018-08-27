<?php

namespace Xeight8\Kladmin\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class AuthController extends Controller
{
    protected $errors = [];

    public function login()
    {
    	return view('kladmin::auth.login');
    }

    public function authenticate(Request $request)
    {
    	$credentials = [
    		'email' => $request->email,
    		'password' => $request->password
    	];

        if (Sentinel::authenticate($credentials)) {

            return redirect()->intended(route('kladmin'));

        } else {

            $this->errors[] = 'Invalid email or password.';

            return redirect()->route('kladmin.auth.login')->withErrors($this->errors);

        }
    }
}
