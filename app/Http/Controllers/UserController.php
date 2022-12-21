<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate(5); 
        return view('user.index', compact('users'));        
    }

    public function create()
    {
        $roleList = ['User', 'Author'];
        return view('user.create', compact('roleList'));
    }

    public function store(Request $request)
    {
        $name = $request->name; 
        $email = $request->email; 
        $phone = $request->phone; 
        $address = $request->address; 
        $role = $request->role; 

        $request->validate([
            'name'=>'required', 
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'role'=>'required'
        ]);

        User::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'role' => $role
        ]); 

        return redirect('/users')->with('msg','Stored Successfully.'); 

        
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $user = User::find($id); 
        $roleList = ['User', 'Author'];
        return view('user.edit',compact('user','roleList'));
    }

    public function update(Request $request, $id)
    {
        $name = $request->name; 
        $email = $request->email; 
        $phone = $request->phone; 
        $address = $request->address; 
        $role = $request->role; 

        $request->validate([
            'name'=>'required', 
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'role'=>'required'
        ]);

        User::find($id)->update([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'role' => $role
        ]);

    

        return redirect('/users')->with('msg','Updated Successfully.'); 
        
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return back()->with('msg','Deleted Successfully.');
    }
}
