<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// Inicializa posts na sessão
Route::get('/posts', function () {
    if (!Session::has('posts')) {
        Session::put('posts', [
            [ 'id' => 1, 'title' => 'Primeiro Post', 'content' => 'Conteúdo do meu primeiro post.' ],
            [ 'id' => 2, 'title' => 'Aprendendo Laravel', 'content' => 'Laravel é um framework incrível para PHP.' ],
        ]);
    }

    $posts = Session::get('posts');
    return view('posts', ['posts' => $posts]);
});

// Rota do formulário de criação
Route::get('/posts/create', function () {
    return view('create_post');
});

// Processar criação de post
Route::post('/posts', function (Request $request) {
    $posts = Session::get('posts', []);

    $novoPost = [
        'id' => count($posts) + 1,
        'title' => $request->input('title'),
        'content' => $request->input('content')
    ];

    $posts[] = $novoPost;
    Session::put('posts', $posts);

    return redirect('/posts');
});

// Exibir um único post
Route::get('/posts/{id}', function ($id) {
    $posts = Session::get('posts', []);
    $post = collect($posts)->firstWhere('id', $id);
    if (!$post) {
        abort(404, 'Post não encontrado');
    }
    return view('post_detalhe', ['post' => $post]);
});