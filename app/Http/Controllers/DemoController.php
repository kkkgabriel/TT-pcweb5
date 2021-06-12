<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index() {
    	return "<h1>potato</h1>";
    }

    public function tomato($anything, $anything2) { // These do not have to be the same as defined in routes
    	return view('welcome', [
    		'fruit1' => $anything,
    		'fruit2' => $anything2
    	]);
    }
}
