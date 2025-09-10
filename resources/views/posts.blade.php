<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Meus Posts</title>
<style>
body { font-family: Arial, sans-serif; margin: 2em; background: #f5f5f5; color: #333; }
h1 { color: #222; margin-bottom: 1em; }
a { text-decoration: none; color: #007bff; }
a:hover { text-decoration: underline; }

.add-btn {
    display: inline-block;
    margin-bottom: 1em;
    padding: 10px 16px;
    background: #007bff;
    color: #fff;
    border-radius: 4px;
}

.post {
    background: #fff;
    border: 1px solid #ccc;
    padding: 1em;
    margin-bottom: 1em;
    border-radius: 6px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}

.post h2 { margin-top: 0; }

.btn-container {
    display: flex;
    gap: 10px;
    margin-top: 1em;
}

.btn-container form { margin: 0; }

.btn-container button,
.edit-btn {
    padding: 8px 14px;
    cursor: pointer;
    border: none;
    border-radius: 4px;
    color: #fff;
    font-weight: bold;
}

.edit-btn { background-color: #28a745; }
.delete-btn { background-color: #dc3545; }
.delete-btn:hover { background-color: #c82333; }
.edit-btn:hover { background-color: #218838; }
</style>
</head>
<body>
<h1>Meus Posts</h1>
<a href="/posts/create" class="add-btn">Adicionar Novo Post</a>
<hr>
@if (empty($posts))
<p>Ainda não há posts. Crie o seu primeiro!</p>
@else
@foreach ($posts as $post)
<div class="post">
<h2>{{ $post['title'] }}</h2>
<p>{{ $post['content'] }}</p>
<div class="btn-container">
<a href="/posts/{{ $post['id'] }}/edit" class="edit-btn">Editar</a>
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