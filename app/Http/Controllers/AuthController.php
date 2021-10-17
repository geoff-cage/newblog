<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function save(Request $request)
    {
        //validate them requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:20'

        ]);

        //insert users into database
        $user = new user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $save = $user->save();

        if ($save) {
            return back()->with('success','New user added successfully');
        } else {
            return back()->with('fail','Something went wrong, try again later');
        }
        
    }

    public function check(Request $request)
    {
        //validate requests
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:15'
        ]);

        $userInfo = User::where('email','=', $request->email)->first();

        if (!$userInfo) {
            return back()->with('fail','We do not recognize your email');
        }else{
            //check password
            if (Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('dash/dashboard');
            }else{
                return back()->with('fail', 'incorrect password');
            }
        }
    }

    public function logout(){
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }

    public function dashboard()
    {
        return view('dash.dashboard');
    }
}
