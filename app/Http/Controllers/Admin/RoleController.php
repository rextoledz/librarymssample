<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index(){
    	
    	$roles = Role::OrderBy('name')
    					->get();

    	return view('admin.roles.index',[
    		'nav' => 3,
    		'roles' => $roles
    	]);
    }
}
