<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function logout(request $request)
    {
        Auth::logout();
        
        return redirect()->route('admin.dashboard');
        
    }
   
}

