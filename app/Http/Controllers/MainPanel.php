<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPanel extends Controller
{
    public function panel(){
        return view('templates.main-panel');
    }
}
