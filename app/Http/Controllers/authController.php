<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8|max:50|confirmed',
        ]);

        $data['password'] = bcrypt($data['password']);
        $data['role_id'] = Role::where('name','user')->first()->id;
        $fullname = explode(' ',$request->name);
        $data['username'] = $fullname[0];

        $user = User::create($data);

        Auth::login($user);

        return redirect(url('/dashboard'));
        
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8|max:30',
        ]);

        $islogin = Auth::attempt(['email' => $data['email'] , 'password' => $data['password']]);

        if(! $islogin)
        {
            return back()->withErrors([
                'not correct'
            ]);
        }
        return redirect(url('/dashboard')); 
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url('/home'));  
    }
}
