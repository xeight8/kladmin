<?php

namespace Xeight8\Kladmin\Http\Controllers\Auth;

use Xeight8\Kladmin\Http\Controllers\KladminBaseController;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class AuthController extends KladminBaseController
{
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

    public function logout()
    {
        $user = Sentinel::getUser();

        if ($user !== null) {
            $this->messages[] = 'You have sucessfully logged out.';
        }
        
        Sentinel::logout($user);

        return redirect()->route('kladmin.auth.login')->with('messages', $this->messages);
    }
}
