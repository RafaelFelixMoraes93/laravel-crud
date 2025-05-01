<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(Request $request) {
        $new_post = [
            'title' => 'Meu primeiro Post2',
            'content'=> 'Conteúdo qualquer2',
            'author' => 'Pedro2',
        ];
        $post = new Post($new_post);
        $post->save();
        dd($post);
    }

    public function read(Request $request) {
        $post = new Post() ;
        $post = $post->find(2);

        return $post;
    }
    public function all(Request $request) {
        $posts = Post::all() ;
        return $posts;
    }

    public function update(Request $request){
        $post = Post::where('id','>',0)->update(([
            'author' => 'Desconhecido'
        ]));
        return $post;
    }
}