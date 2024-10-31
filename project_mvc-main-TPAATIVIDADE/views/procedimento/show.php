<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes dos procedimentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Detalhes dos procedimentos</h1><br>
    <p style="padding-left: 30px;"><strong>ID:</strong> <?php echo htmlspecialchars($procedimento['id'], ENT_QUOTES, 'UTF-8'); ?></p>
    <p style="padding-left: 30px;"><strong>Nome:</strong> <?php echo htmlspecialchars($procedimento['nome'], ENT_QUOTES, 'UTF-8'); ?></p>
    <p style="padding-left: 30px;"><strong>Tipo:</strong> <?php echo htmlspecialchars($procedimento['tipo'], ENT_QUOTES, 'UTF-8'); ?></p>
    <p style="padding-left: 30px;"><strong>Ações:</strong> <?php echo htmlspecialchars($procedimento['acoes'], ENT_QUOTES, 'UTF-8'); ?></p>
    <a href="index.php?action=procedimento"><button style="position: absolute; right: 60px; top: 10px;" type="button" class="btn btn-dark">Voltar</button></a>
</body>

</html>