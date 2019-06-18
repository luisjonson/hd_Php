<?php

$bdServidor = '127.0.0.1';
$bdUsuario = 'sistematarefa';
$bdSenha = '123';
$bdBanco = 'tarefas';

$conexao = mysqli_connect($bdServidor,$bdUsuario, $bdSenha,$bdBanco);

if(mysqli_connect_errno($conexao)){
    echo "Problema para conectar no banco. Verifique os dados!";
    die();
}
function buscar_tarefas($conexao)
{
    $sqlBusca = 'SELECT * FROM tarefas';
    $resultado = mysqli_query($conexao, $sqlBusca);

    $tarefas = array();

    while ($tarefa = mysqli_fetch_assoc($resultado)) {
        $tarefas[] = $tarefa;
    }
    return $tarefas;
}

function gravar_tarefa($conexao, $tarefa)
{
    $sqlGravar = "
    INSERT INTO tarefas
    (
        '{$tarefa['nome']}',
        '{$tarefa['descricao]}',
         {$tarefa['prioridade']}
    )
    ";
    mysqli_query($conexao, $sqlGravar);
}