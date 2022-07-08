<?php

namespace App\Http\Controllers;
use App\Models\Addpost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserpostdisplayController extends Controller
{
    public function postdisplay(){
        $display=Addpost::all();
        if (Auth::check()) {
        return view('userhome')->with('userdisplay',$display);
    }
    else{
        return redirect('/');
    }
}
}
