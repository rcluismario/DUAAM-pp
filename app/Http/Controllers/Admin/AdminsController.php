<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAdminRequest;
use Illuminate\Support\Facades\Hash;

class AdminsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $admins = Admin::all();

        return view('admin.admins.index',['admins' => $admins]);
    }

    public function store(CreateAdminRequest $request){

        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->back();
    }
    public function edit($id){
        $admin = Admin::findOrFail($id);
        return view("admin.admins.update", ["admin" => $admin]);   
    }
    public function update(CreateAdminRequest $request){
        $admin = Admin::findOrFail($request->admin_id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->save();
        return redirect()->route('admin.admins.index'); 
    }
    public function delete(Request $request){
        $admin = Admin::findOrFail($request->admin_id);

        $admin->delete();
        // >:(
        return redirect()->back();
    }

}
