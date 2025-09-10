<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Meus Posts</title>
<style>
body { font-family: sans-serif; margin: 2em; }
h1 { color: #333; }
.post { border: 1px solid #ccc; padding: 1em; margin-bottom: 1em; border-radius: 5px; }
.post h2 { margin-top: 0; }
a { text-decoration: none; color: #007bff; }
.btn-container { display: flex; gap: 10px; margin-top: 1em; }
.btn-container form { margin: 0; }
.btn-container button { padding: 8px 12px; cursor: pointer; border: none; border-radius: 3px; color: #fff; }
.edit-btn { background-color: #28a745; }
.delete-btn { background-color: #dc3545; }
</style>
</head>
<body>
<h1>Meus Posts</h1>
<a href="/posts/create">Adicionar Novo Post</a>
<hr>
@if (empty($posts))
<p>Ainda não há posts. Crie o seu primeiro!</p>
@else
@foreach ($posts as $post)
<div class="post">
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
@endforeach
@endif
</body>
</html>