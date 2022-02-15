<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function index() 
    {
        return view('register.index', [
            'title' => 'Register',
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:4|max:255'
        ]);

        $valid['password'] = Hash::make($valid['password']);

        User::create($valid);

        // $request->session()->flash('success', 'Registration succesfull! Please login');
        // dd('regis mantul');
        
        return redirect('/login')->with('success', 'Registration succesfull! Please login');
    }
}
