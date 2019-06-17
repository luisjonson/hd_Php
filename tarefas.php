
<?php
session_start();

if (isset($_GET['nome']) && $_GET['nome'] != '') {
    $tarefa = array();

    $tarefa['nome'] = $_GET['descricao'];

    if(isset($_GET['descricao'])){
        
    }                                                                                                                                 
}
if (isset($_SESSION['lista_tarefas'])) {
$lista_tarefas = $_SESSION['lista_tarefas'];
} else {
$lista_tarefas = array();
}

include "template.php";
?>