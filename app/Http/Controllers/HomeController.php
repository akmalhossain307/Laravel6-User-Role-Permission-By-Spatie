<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       return view('home');
        //return "Hello";
        //Role::create(['name'=>'writer']);
        //Permission::create(['name'=>'edit post']);

       //$role=Role::findById(1);
       //$permission=Permission::findById(1);
      // $role=Role::findById(1);
       //$permission = Permission::create(['name' => 'edit post']);
       //$permission = Permission::create(['name' => 'edit post']);
       //$permission=Permission::findById(3);
       //$role=Role::findById(1);
       //$role->givePermissionTo($permission);
       //$permission->assignRole($role);
      // auth()->user()->givePermissionTo('edit post');
       //auth()->user()->assignRole('writer');


       //return auth()->user()->getPermissionNames();
        //return view('home');
    }
}
