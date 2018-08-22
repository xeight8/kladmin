<?php

namespace Xeight8\Kladmin\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function show()
    {
    	return view('kladmin::master');
    }
}
