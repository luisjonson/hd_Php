<?<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="">
        <fieldset>
            <label>
                Tarefa:
                <input type="text" name="nome">
            </label>
            <label>
                Descrição(Opcional):
                <textarea name="descricao"></textarea>
            </label>
            <label>
                Prazo (Opcional):
                <input type="text" name="prazo">
            </label>
            <fieldset>
                <legend>Proiridade</legend>
                <input type="radio" name="prioridade" value="1" checked/>
                Baixa
                <input type="radio" name="prioridade" value="2"/>
                Média
                <input type="radio" name="priordade" value="3"/>
            </fieldset>
            <label for="">
                Tarefa concluída:
                <input type="checkbox" name="concluida" value="1">
            </label>
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>
    
</body>
</html>