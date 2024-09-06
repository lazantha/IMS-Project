<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
    try {
        return view('index');
    } catch (\Exception $e) {
        // Log the error and return a custom view or message
        \Log::error('Error in HomeController: '.$e->getMessage());
        return response()->view('errors.errors.database', [], 500);
    }
}

    
}
