<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function comment(Request $request){
      
        $id=$request->id;
        $comment=$request->comment;
        $createcomment=Comment::create([
            'comment_id'=>$id,
            'comment'=>$comment,
        ]);
        return redirect()->back();
    }
}
