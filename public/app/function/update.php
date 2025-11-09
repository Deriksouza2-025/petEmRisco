<?php
require_once '../function/manipularDados.php';


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['idForm'] == 'usuario'){
        /**Receber o id para verificar o item a ser apagado */
        $id = $_POST['id'];
        /**Receber campos para atualizar */
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $situacao = $_POST['situacao'];

        /**Referenciar os campos necessários */
        $tabela = 'usuarios';
        $valor = "nome = '$nome', email = '$email', senha = '$senha', situacao = '$situacao'";
        $campoId = 'id';
        $valorId = "'$id'";
        if(empty($nome)){
            echo "
            <script>
                alert ('Preencha o nome!');
                window.location.href='../views/?tela=form_search_update_usuario';
            </script>";
        exit;
        }else if(empty($email)){
            echo "
            <script>
                alert ('Preencha a e-mail!');
                window.location.href='../views/?tela=form_search_update_usuario';
            </script>";
        exit;
        }else if(empty($senha)){
            echo "
                <script>
                    alert ('Preencha a senha!');
                    window.location.href='../views/?tela=form_search_update_usuario';
                </script>";
            exit;
        }else if(empty($situacao)){
            echo "
            <script>
                alert ('Preencha a situação!');
                window.location.href='../views/?tela=form_search_update_usuario';
            </script>";
        exit;
        }else{
            atualizar($tabela, $valor, $campoId, $valorId);
            echo "
                <script>
                    alert ('Atualizado com sucesso!');
                    window.location.href='../views/?tela=form_search_update_usuario';
                </script>";
            exit;
        }
    }

    if($_POST['idForm'] == 'agenda'){
        /**Receber o id para verificar o item a ser apagado */
        $id = $_POST['id'];
        /**Receber campos para atualizar */
        $dataAgenda = $_POST['dataAgenda'];
        $horaInicio = $_POST['horaInicio'];
        $nome = $_POST['nome'];
       

        /**Referenciar os campos necessários */
        $tabela = 'agenda';
        $valor = "dataAgenda = '$dataAgenda', horaInicio = '$horaInicio', nome = '$nome'";
        $campoId = 'id';
        $valorId = "'$id'";
         if(empty($dataAgenda)){
            echo "
            <script>
                alert ('Preencha a data!');
                window.location.href='../views/?tela=form_search_update_agenda';
            </script>";
        exit;
        }else if(empty($horaInicio)){
            echo "
                <script>
                    alert ('Preencha a hora!');
                    window.location.href='../views/?tela=form_search_update_agenda';
                </script>";
            exit;
        }else if(empty($nome)){
            echo "
            <script>
                alert ('Preencha o nome!');
                window.location.href='../views/?tela=form_search_update_agenda';
            </script>";
        exit;
        }else{
            atualizar($tabela, $valor, $campoId, $valorId);
            echo "
                <script>
                    alert ('Atualizado com sucesso!');
                    window.location.href='../views/?tela=form_search_update_agenda';
                </script>";
            exit;
        }
    }


    if($_POST['idForm'] == 'date'){
        /**Receber o id para verificar o item a ser apagado */
        $id = $_POST['id'];
        /**Receber campos para atualizar */
        $id = $_POST['id'];
        $dayDateHour = $_POST['dayDateHour'];
        $hourDateHour = $_POST['hourDateHour'];
        

        /**Referenciar os campos necessários */
        $tabela = 'tbdatehour';
        $valor = "id = '$id', dayDateHour = '$dayDateHour', hourDateHour = '$hourDateHour'";
        $campoId = 'id';
        $valorId = "'$id'";
        if(empty($id)){
            echo "
            <script>
                alert ('Preencha o id!');
                window.location.href='../views/?tela=form_search_update_date';
            </script>";
        exit;
        }else if(empty($dayDateHour)){
            echo "
            <script>
                alert ('Preencha a e-mail!');
                window.location.href='../views/?tela=form_search_update_date';
            </script>";
        exit;
        }else if(empty($hourDateHour)){
            echo "
                <script>
                    alert ('Preencha a hourDateHour!');
                    window.location.href='../views/?tela=form_search_update_date';
                </script>";
            exit;
        }else{
            atualizar($tabela, $valor, $campoId, $valorId);
            echo "
                <script>
                    alert ('Atualizado com sucesso!');
                    window.location.href='../views/?tela=form_search_update_date';
                </script>";
            exit;
        }
    }
}