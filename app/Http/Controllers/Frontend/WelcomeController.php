<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function thankyou()
    {
        return ('thankyou .. Your reservation is ready');
    }
public function index(){
return view('welcome');
}


}

