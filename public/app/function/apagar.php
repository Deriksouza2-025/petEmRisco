<?php
require_once '../function/manipularDados.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if($_POST['idForm'] == 'apUsuario'){
        /**Recebedo o id para verificar o item a ser apagado */
        $id = $_POST['id'];
        /**Referenciar os campos necessários */
        $tabela = 'usuarios';
        $campoId = 'id';
        $valorId = "'$id'";
        apagar($tabela, $campoId, $valorId);
        echo "
            <script>
                alert ('Apagado com sucesso!');
                window.location.href='../views/?tela=form_search_del_usuario';
            </script>";
        exit;
    }
}
    if($_POST['idForm'] == 'apAgenda'){
        /**Recebedo o id para verificar o item a ser apagado */
        $id = $_POST['id'];
        /**Referenciar os campos necessários */
        $tabela = 'agenda';
        $campoId = 'id';
        $valorId = "'$id'";
        apagar($tabela, $campoId, $valorId);
        echo "
            <script>
                alert ('Apagado com sucesso!');
                window.location.href='../views/?tela=form_search_del_agenda';
            </script>";
        exit;
    }
