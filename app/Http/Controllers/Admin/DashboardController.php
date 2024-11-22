<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){

    	$totalusers = User::count();

    	return view('admin.dashboard.index',[
    		'totalusers' => $totalusers
    	]);
    }
}