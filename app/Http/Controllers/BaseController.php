<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    function index(){    
        return Redirect::to("/blog");
    }
}
