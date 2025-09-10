<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $post['title'] }}</title>
<style>
body { font-family: Arial, sans-serif; margin: 2em; background: #f5f5f5; color: #333; }
h1 { color: #222; margin-bottom: 1em; }

.post-detail {
    background: #fff;
    border: 1px solid #ccc;
    padding: 1em;
    border-radius: 6px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}

.post-detail h2 { margin-top: 0; }

a { text-decoration: none; color: #007bff; }
a:hover { text-decoration: underline; }

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

.back-btn {
    display: inline-block;
    margin-top: 1em;
    padding: 8px 12px;
    background: #007bff;
    color: #fff;
    border-radius: 4px;
}
.back-btn:hover { background-color: #0069d9; }
</style>
</head>
<body>
<h1>Detalhes do Post</h1>

<div class="post-detail">
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

<a href="/posts" class="back-btn">Voltar para a lista</a>
</body>
</html>