<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import model User

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function tables(){
        $users = User::all();
        return view('admin.tables', compact('users'));
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.edit', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password')); // bcrypt untuk hash password atau mengamankan
        $user->usertype = $request->input('usertype'); // untuk penggunaan multi role
        $user->save();

        return redirect()->route('admin.tables')->with('success', 'User updated successfully');
    }

    public function delete($id){
        User::find($id)->delete();
        return redirect()->route('admin.tables')->with('success', 'User deleted successfully');
    }
    
    public function add(){
        return view('admin.add');
    }

    public function report(){
        return view('admin.report');
    }

    public function notifications(){
        return view('admin.notifications');
    }

    public function data(){
        return view('admin.data');
    }

    public function help(){
        return view('admin.help');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255', // Validasi agar form diisi sesuai validasi yang kita inginkan
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'usertype' => 'required|string|in:admin,user', // Pastikan field usertype sesuai
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')), // Enkripsi password
            'usertype' => $request->input('usertype'), // Ganti role menjadi usertype
        ]);

        return redirect()->route('admin.tables')->with('success', 'User added successfully');
    }

}
