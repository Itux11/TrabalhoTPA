<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando novo Procedimento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Criando novo Procedimento</h1><br>
    <form action="index.php?action=create_procedimento" method="post" style="padding-left: 30px;">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <label for="tipo">Tipo:</label>
        <input type="text" id="tipo" name="tipo" required>
        <br><br>
        <label for="tipo">Ações:</label>
        <input type="text" id="acoes" name="acoes" required>
        <br><br>
        <a style="padding-left: 10px;" href="index.php?action=create_procedimento"><button class="btn btn-primary" type="submit" value="Create">Criar</button></a>
    </form>
    <a href="index.php?action=procedimento"><button style="position: absolute; right: 60px; top: 10px;" type="button" class="btn btn-dark">Voltar</button></a>
</body>

</html>