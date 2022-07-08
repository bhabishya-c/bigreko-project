<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function signup(){
        if(Auth::check()){
        return view('register');
    }else{
        return redirect('/');
    }
}
    public function register(Request $request){
          $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>$request->role,
          ]);
        // $user = new User;
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->role = $request->role;
        // $save=$user->save();
        if($user){
            return redirect('/signup')->with('success','User has been created successfully');
        }
            else{
                return redirect('/signup')->with('error','Failed to create user');
            }
        // $name=$request->input('name');
        // $email=$request->input('email');
        // $password=$request->input('password');
        // $role=$request->input('role');
        // $insert=User::insert(['name'=>$name,'email'=>$email,'password'=>$password,'role'=>$role]);
        
    }
    
}
