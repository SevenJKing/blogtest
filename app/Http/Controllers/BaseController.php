<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    function index(){    
        return Redirect::to("/blog");
    }
    function setlang($lang){  
        Session::put('localLang',$lang);   
        return session('localLang');   
    }
}
