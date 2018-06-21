<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\PostCategory;

class PostController extends Controller{
  public function index($id){
    $post = Post::findOrFail($id);
    $post->category = PostCategory::find($post->post_category_id);
    $data["post"] = $post;
    $data["postRecommendation"] = Post::where("post_category_id", $post->post_category_id)->orderBy("updated_at", "desc")->limit(6)->get();
    
    return view("pages.post")->with($data);
  }
}
