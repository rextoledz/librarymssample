<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        $totalusers = User::count();

        return view('student.dashboard.index',[
            'totalusers' => $totalusers
        ]);
    }
}
