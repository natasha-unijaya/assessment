<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
class PostController extends Controller
{
    public function index(){
      $post = Post::paginate(4);
      return view('post.index',compact('post'));
    }

    public function addPost(request $request){
      $rules = array(
        'name' => 'required',
        'email' => 'required',
      );
    $validator = Validator::make ( Input::all(), $rules);
    if ($validator->fails())
    return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));

    else {
      $post = new Post;
      $post->name = $request->name;
      $post->email = $request->email;
      $post->save();
      return response()->json($post);
    }
}

public function editPost(request $request){
  $post = Post::find ($request->id);
  $post->name = $request->name;
  $post->email = $request->email;
  $post->save();
  return response()->json($post);
}

public function deletePost(request $request){
  $post = Post::find ($request->id)->delete();
  return response()->json();
}

public function search (Request $request){
    $search = $request->get('search');
    $posts = DB::table('posts')->where('name', 'like', '&'.$search.'&');
    return view('index', ['posts'=> $posts]);
}
}