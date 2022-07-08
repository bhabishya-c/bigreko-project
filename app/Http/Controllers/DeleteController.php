<?php

namespace App\Http\Controllers;
use App\Models\Addpost;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function postdelete(Request $request){
        $id=$request->id;
        Addpost::where('post_id',$id)->delete();
        return redirect('/adminhome');
    }
}
