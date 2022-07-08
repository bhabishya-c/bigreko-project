<?php

namespace App\Http\Controllers;
use App\Models\Addpost;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentdisplayController extends Controller
{
    
    public function usercontentdisplay(Request $request){
    $id=$request->id;
    $contentdisplay=Addpost::where('post_id',$id)->get();
    $commentdisplay=Comment::where('comment_id',$id)->get();
    if(Auth::check()){
    return view('usercontentdisplay')->with('display',$contentdisplay)->with('comment',$commentdisplay);
    }
    else{
        return redirect('/');
    }
}
    public function admincontentdisplay(Request $request){
        $id=$request->id;
        $contentdisplay=Addpost::where('post_id',$id)->get();
        $commentdisplay=Comment::where('comment_id',$id)->get();
        if(Auth::check()){
        return view('admincontentdisplay')->with('display',$contentdisplay)->with('comment',$commentdisplay);
        }
        else{
            return redirect('/');
        }
}
}
