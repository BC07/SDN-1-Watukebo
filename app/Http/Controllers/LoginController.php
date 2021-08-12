<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admins;

class LoginController extends Controller
{
    public function index(){
        return view('auth.index');
    }

    public function login(Request $request){

        $admins = new Admins;
        $admins->name = 'admin';
        $admins->username = 'adm1n123';
        $admins->password = bcrypt('admin');

        if(Admins::where('username', 'adm1n123')->first()){
            if(Auth::guard('admin')->attempt($request->only('username', 'password'))){
                return redirect('/admin');
            }
            else{
                return redirect()->back()->with('fail', 'Username atau Password salah'); 
            }
        }else{
            $admins->save();
            if(Auth::guard('admin')->attempt($request->only('username', 'password'))){
                return redirect('/admin');
            }
            else{
                return redirect()->back()->with('fail', 'Username atau Password salah'); 
            }
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('auth.index');
    }

}