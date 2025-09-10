<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Criar Post</title>
<style>
body { font-family: Arial, sans-serif; margin: 2em; background: #f5f5f5; color: #333; }
h1 { color: #222; margin-bottom: 1em; }

form {
    background: #fff;
    padding: 1em;
    border-radius: 6px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    max-width: 500px;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 8px 10px;
    margin-bottom: 1em;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-family: inherit;
}

button {
    padding: 10px 16px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
}
button:hover { background-color: #0069d9; }

a { text-decoration: none; color: #007bff; display: inline-block; margin-top: 1em; }
a:hover { text-decoration: underline; }
</style>
</head>
<body>
<h1>Criar Novo Post</h1>
<form action="/posts" method="POST">
    @csrf
    <label>Título:</label><br>
    <input type="text" name="title" required><br>

    <label>Conteúdo:</label><br>
    <textarea name="content" rows="5" required></textarea><br>

    <button type="submit">Salvar</button>
</form>
<a href="/posts">Voltar</a>
</body>
</html>