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
}