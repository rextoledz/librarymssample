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

    public function create()
    {
    	return view('admin.roles.create',[
    		'nav' => 3
    	]);
    }

    public function store(Request $request)
    {
    	$saveRole = new Role;
    	$saveRole->name = $request->input('name');
    	$saveRole->url = $request->input('url');

    	if ($saveRole->save()) {
    		return "Successfully saved";
    	}
    }
}
