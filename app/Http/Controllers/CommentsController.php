<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\User;

class CommentsController extends Controller
{
    public function store(Post $post) {

    	$this->validate(request(),['body' => 'required|min:2']);


    	$post->addComment(request('body'));

		return back(); 
    }

    public function edit($id) {

        $comment = Comment::find($id);

         return view('commentsedit', compact('comment'));

    }


    public function update(Request $request,$id) {



        request()->validate([


            'body' => 'required'

        ]);
        $comment = Comment::find($id);
        $comment->body = $request->body;        
        $comment->save();

        return redirect('/');

    }


    public function destroy($id) {

        $comment = Comment::find($id);

        $comment->delete();

        return redirect('/');
        
    }

}
