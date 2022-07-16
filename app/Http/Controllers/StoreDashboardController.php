<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreDashboardController extends Controller
{
    //
    public function showStoreDashboard(){
        return view('storeDashboardPage');
    }
}
