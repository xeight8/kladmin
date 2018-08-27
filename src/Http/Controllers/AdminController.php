<?php

namespace Xeight8\Kladmin\Http\Controllers;

use Xeight8\Kladmin\Http\Controllers\KladminBaseController;

class AdminController extends KladminBaseController
{
    public function dashboard()
    {
    	return view('kladmin::master');
    }
}
