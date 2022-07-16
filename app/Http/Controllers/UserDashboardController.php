<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserDashboardController extends Controller
{
    //
    public function showUserDashboard(){
        $store = User::find(Auth::id())->store;

        if($store) {
            return view('userDashboardPage', ['user' => Auth::user(), 'store' => $store]);
        }

        return view('userDashboardPage', ['user' => Auth::user()]);
    }
}
