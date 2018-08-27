<?php

namespace Xeight8\Kladmin\Http\Controllers;

use App\Http\Controllers\Controller;

class KladminBaseController extends Controller 
{
    protected $errors = [];
    protected $messages = [];
    protected $alerts = [];
}