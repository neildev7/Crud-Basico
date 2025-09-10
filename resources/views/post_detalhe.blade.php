<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $post['title'] }}</title>
<style>
body { font-family: sans-serif; margin: 2em; }
h1 { color: #333; }
.post-detail { border: 1px solid #ccc; padding: 1em; border-radius: 5px; }
a { text-decoration: none; color: #007bff; }
.btn-container { display: flex; gap: 10px; margin-top: 1em; }
.btn-container form { margin: 0; }
.btn-container button { padding: 8px 12px; cursor: pointer; border: none; border-radius: 3px; color: #fff; }
.edit-btn { background-color: #28a745; }
.delete-btn { background-color: #dc3545; }
</style>
</head>
<body>
<h1>Detalhes do Post</h1>

<div class="post-detail">
    <h2>{{ $post['title'] }}</h2>
    <p>{{ $post['content'] }}</p>

    <div class="btn-container">
        <a href="/posts/{{ $post['id'] }}/edit" class="edit-btn" style="color:white; padding: 8px 12px;">Editar</a>
        <form action="/posts/{{ $post['id'] }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-btn">Excluir</button>
        </form>
    </div>
</div>

<br>
<a href="/posts">Voltar para a lista</a>
</body>
</html>
