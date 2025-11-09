<?php
require_once '../function/manipularDados.php';
function cadastrarUsuario(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $tabela = 'usuarios';
        $campos = "nome, email, senha";
        $valores = "'$nome', '$email', '$senha'";
        $campoId = "email";
        $valorId = "'$email'";
        if(empty($nome) || empty($email) || empty($senha)){
          echo "
          <div class='alert alert-danger mt-3'>
            <p class='lead text-center text-bg-black'>Preencha os campos!</p>
          </div>";
        }else if(seExiste($tabela, $campoId, $valorId) == 1){
          echo "
          <div class='alert alert-danger mt-3'>
            <p class='lead text-center text-bg-black'>O usuário já existe!</p>
          </div>";
        }
        else{
          require_once '../function/tipoTabela.php';
        }  
    }

?>