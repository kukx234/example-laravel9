<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Greeting extends Controller
{
    public function index(Request $request) {
        if(!empty($request->id)){
            return 'fetch something with id ' . $request->id;
        }

        return 'no id passed, so no response';
    }
}
