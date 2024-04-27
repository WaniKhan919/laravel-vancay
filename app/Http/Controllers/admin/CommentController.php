<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    public function index(){
        $comments = Comment::with(['user', 'job'])->orderBy('id' , 'desc')->get();
        return view('admin.comment.index',  compact('comments'));
    }

    public function add_comment(Request $request){

        $request->validate([
            'comment' => 'required'
        ]);

        $comment = new Comment();
        $comment->comment = trim($request->comment);
        $comment->user_id = auth()->user()->id;
        $comment->job_id = trim(intval($request->job_id));
        $comment->save();


        return back();
    }

    public function delete_comment($id){
        $comment = Comment::find($id);
        $comment->delete();
        return back();
    }
}
