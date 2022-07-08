<?php

namespace App\Http\Controllers;
use App\Models\Addpost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AddpostController extends Controller
{
    public function userpost(){
        if (Auth::check()) {
        return view('useraddpost');
    }else{
        return redirect('/');
    }
}
    public function adminpost(){
        if (Auth::check()) {
        return view('adminaddpost');
    }else{
        return redirect('/');
    }
}
    public function addpost(Request $request ){
     
        $addpost=Addpost::create([
            'user_id'=>$request->id,
            'title'=>$request->title,
            'content'=>$request->content,
            ]);
            if($addpost){
                return redirect()->back()->with('addpostsuccess','Post has been added successfully');
            }else{
                return redirect()->back()->with('addposterror','Failed to add post');
            }
    }
}
