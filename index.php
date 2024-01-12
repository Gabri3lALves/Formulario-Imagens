<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CRUD de Imagens</h1>

    <!-- Formulário de upload de imagens -->
    <form action="formualário.php" method="post" enctype="multipart/form-data">
        <label for="imagem">Escolha uma imagem:</label>
        <input type="file" name="imagem" id="imagem" required>
        <br>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao"></textarea>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>