<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('student.dashboard');
        $totalusers = User::count();

        return view('student.dashboard.index',[
            'totalusers' => $totalusers
        ]);
    }
}
