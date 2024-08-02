<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardUser(){
        return view('dashboard');
    }

    public function dashboardAdmin(){
        $item = product::all();
        return view('dashboardAdmin', compact('item'));
    }
}
