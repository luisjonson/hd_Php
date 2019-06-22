<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="tarefas.css" type="text/css" />
    <title>Gerenciador de Tarefas</title>
</head>
<body>

    <h1>Gerenciador de Tarefas</h1>
    <!-- Aqui irá o restante do código -->

    <?php include('formulario.php'); ?>

    <?php if($exibir_tabela) : ?>
        <?php include('tabela.php'); ?>
    <?php endif; ?>

</body>
</html>