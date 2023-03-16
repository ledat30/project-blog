<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('admin.comment.index' ,compact('comments'));
    }
    public function delete($id){
        Comment::find($id)->delete();
        return Redirect::route('admin.comment.index')->with('success','Delete successfully');
    }
}
