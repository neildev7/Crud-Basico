<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Criar Post</title>
</head>
<body>
<h1>Criar Novo Post</h1>
<form action="/posts" method="POST">
    @csrf
    <label>Título:</label><br>
    <input type="text" name="title"><br><br>

    <label>Conteúdo:</label><br>
    <textarea name="content"></textarea><br><br>

    <button type="submit">Salvar</button>
</form>
<br>
<a href="/posts">Voltar</a>
</body>
</html>