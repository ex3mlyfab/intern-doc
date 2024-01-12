<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiFormController extends Controller
{
    //
    public function createRole(){
        return view('create-role');
    }
}
