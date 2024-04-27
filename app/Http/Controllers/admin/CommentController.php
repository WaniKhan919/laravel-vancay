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
}
