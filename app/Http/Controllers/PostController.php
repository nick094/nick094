<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use Carbon\Carbon;
use App\Comment;


class PostController extends Controller
{

    public function __construct() {

        $this->middleware('auth')->except(['index','show']);
    }


    public function index() {

        $posts=(new \App\Repositories\Posts)->all();

    	return view('index',compact('posts','archives'));

    }


    public function show($id) {

    	$post = Post::find($id);

    	return view('show',compact('post'));

    }


    public function create() {

    	return view('create');

    }



    public function store() {


        auth()->user()->publish(

            new Post(request(['title','body']))
        );

        session()->flash('message','Your post have now been published');

    		return redirect('/');

    }

    public function edit($id) {

        $post = Post::findOrFail($id);

        return view('editpost', compact('post'));

    }


    public function update(Request $request,$id) {



        request()->validate([

            'title' => 'required',

            'body' => 'required'

        ]);
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;        
        $post->save();

        return redirect('/');

    }


    public function destroy($id) {

        $post = Post::find($id);

        $post->delete();

        return redirect('/');
        
    }

}
