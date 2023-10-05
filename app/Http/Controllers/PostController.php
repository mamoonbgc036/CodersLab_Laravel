<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function index(){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        $array = $response->json($key = null, $default = null);
        for($i = 0; $i < count($array); $i++){
            $post = new Post();
            $post->userId = $array[$i]['userId'];
            $post->title = $array[$i]['title'];
            $post->body = $array[$i]['body'];
            $post->save();
        }
        return 'Data Inserted';
        //  return view('post.index');
    }

    public function show(){
        $allPost = DB::table('posts')->paginate(15);
        return view('post.index', [
            'allPost' => $allPost
        ]);
    }
}
