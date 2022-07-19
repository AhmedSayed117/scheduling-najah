<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Groups;
use App\Models\User;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index()
    {
        return view('admin.control',[
            'groups'=>Groups::get(),
        ]);
    }

    public function showGroup($id)
    {
        return view('admin.show',['group'=>Groups::where('id',$id)->get()->first(),'users'=>User::where('groups',$id)->get()]);
    }

    public function add_group()
    {
        return view('admin.addGroup');
    }

    public function createGroup(Request $request)
    {
        Groups::create([
           'name'=>$request->name
        ]);
        return redirect('/admin')->with('status', 'You Added Group Successfully');

    }

}
