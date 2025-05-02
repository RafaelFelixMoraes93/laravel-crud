<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //No futuro irá apenas exibir um formulário.
        $new_post = [
            'title' => 'Meu primeiro Post4',
            'content'=> 'Conteúdo qualquer4',
            'author' => 'Pedro4',
        ];
        $post = new Post($new_post);
        $post->save();
        return $post;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //No futuro, receberá um post com um novo recurso.
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = new Post() ;
        $post = $post->find($id);

        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id)->update(([
            'author' => 'Desconhecido'
        ]));
        return $post;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        if($post){
            $post->delete();
        } else {
            return 'Não existe post com esse id';
        }    
    }
}
