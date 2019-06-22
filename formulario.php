<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form>
        <input type="hidden" name="id"
            value="<?php echo $tarefa['id']; ?>" />
        <fieldset>
         
                Tarefa:
                <input type="text" name="nome"
                    value="<?php echo $tarefa['nome']; ?>" />
                    
                Descrição(Opcional):
                <textarea name="descricao">
                    <?php echo $tarefa['descricao']; ?>
                </textarea>
      
                Prazo (Opcional):
                <input type="text" name="prazo"
                    value="<?php
                        echo traduz_data_para_exibir($tarefa['prazo']);
                    ?> "
                />

                <input type="radio" name="prioridade" value='1'>
                    <?php echo($tarefa['prioridade'] == 1)
                    ? 'checked'
                    :'';?> /> Baixa
                    
                    <input type="radio" name="prioridade" value='1'>
                    <?php echo($tarefa['prioridade'] == 2)
                    ? 'checked'
                    :'';?> /> média
                    
                    <input type="radio" name="prioridade" value='1'>
                    <?php echo($tarefa['prioridade'] == 3)
                    ? 'checked'
                    :'';?> /> Alta
                 
            o" name="prioridade" value="2"/>
                Média
                <input type="radio" name="priordade" value="3"/>
            </fieldset>
            <label for="">
                Tarefa concluída:
                <input type="checkbox" name="concluida" value="1">
           
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>
    
</body>
</html>