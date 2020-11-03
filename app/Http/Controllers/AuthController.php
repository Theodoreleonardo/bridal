<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function index(){
        return view("admin.login");
    }

    public function login(Request $request){
        if(Auth::attempt(['name'=>$request->name,'password' => $request->password])){
            return redirect('/gaun');
        }
        else{
            echo "elese 1";
            return redirect('/admin/login/')->with('message','Nama atau Password salah');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/admin/login/');
    }
}