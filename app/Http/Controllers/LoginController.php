<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function loginform(){
        return view('login');
    }
    public function login(Request $request){
          $email=$request->email;
          $password=$request->password;
          if (Auth::attempt(['email' => $email, 'password' => $password,'role'=>'admin'])) {
            $request->session()->regenerate();
            return redirect('/adminhome');
        }
        elseif (Auth::attempt(['email' => $email, 'password' => $password,'role'=>'user'])) {
            $request->session()->regenerate();
            return redirect('/userhome');
        }elseif(Auth::attempt(['email'=>!$email,'password'=>$password])){
            return redirect('/')->with('emailerror',"Entered email is wrong");
        }
        // elseif(Auth::attempt(['email'=>$email,'password'=>!$password])){
        // return redirect('/')->with('passworderror',"Entered password is wrong");
        // }
        else{
            return redirect('/')->with('error',"Entered email or password is wrong");
        }
        
    }
}
