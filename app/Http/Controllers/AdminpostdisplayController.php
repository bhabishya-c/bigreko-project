<?php

namespace App\Http\Controllers;
use App\Models\Addpost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminpostdisplayController extends Controller
{
    public function postdisplay(){
        $display=Addpost::all();
        if (Auth::check()) {
        return view('adminhome')->with('admindisplay',$display);
    }else{
        return redirect('/');
    }
}
}