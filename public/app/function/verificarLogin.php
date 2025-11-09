<?php
/**Função que verifica os dados de acesso para realizar login no sistema */
require_once '../function/conexao.php';

function verificarLogin(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_URL);

        if(empty($email)){
            return 'Preencha o e-mail!';
        }

        if(empty($senha)){
            return 'Preencha a senha!';
        }

        if(isset($email) && isset($senha)){

            $conn = conexao();
            if(!$conn){
                echo "Erro de conexão ao tentar realizar login!";
                return null;
            }
            try {
                $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha' and situacao = 'ATIVO'";
                $query = mysqli_query($conn, $sql);
                $resultado = mysqli_num_rows($query);
                if($resultado == 1){ 
                    session_start();
                    $_SESSION['nome'] = $resultado['nome'];
                    $_SESSION['email'] = $email;
                    $_SESSION['senha'] = $senha;
                    header('Location: ../views/tela_agenda.php');
                }else if($resultado == 0){
                    return "Usuário ou senha inválidos!";
                }else if($resultado > 1){
                    return "Usuário bloqueado, entre em contado com o administrador do sistema!";
                }
            } catch (Exception $e) {
                return "Erro de SQL: " . $e->getMessage();
            }
        }
    }
}

function validarLogin(){
    return isset($_SESSION['nome']) && isset($_SESSION['senha']);
}

function sairLogin(){
    $_SESSION = array();
    session_destroy();
    header('Location: ../controls/index.php');
}

function verificarLoginVoluntario(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_URL);

        if(empty($email)){
            return 'Preencha o e-mail!';
        }

        if(empty($senha)){
            return 'Preencha a senha!';
        }

        if(isset($email) && isset($senha)){

            $conn = conexao();
            if(!$conn){
                echo "Erro de conexão ao tentar realizar login!";
                return null;
            }
            try {
                $sql = "SELECT * FROM voluntario WHERE email = '$email' and senha = '$senha' and situacao = 'ATIVO'";
                $query = mysqli_query($conn, $sql);
                $resultado = mysqli_num_rows($query);
                if($resultado == 1){ 
                    session_start();
                    $_SESSION['nome'] = $resultado['nome'];
                    $_SESSION['email'] = $email;
                    $_SESSION['senha'] = $senha;
                    header('Location: ../views/chat.html');
                }else if($resultado == 0){
                    return "Usuário ou senha inválidos!";
                }else if($resultado > 1){
                    return "Usuário bloqueado, entre em contado com o administrador do sistema!";
                }
            } catch (Exception $e) {
                return "Erro de SQL: " . $e->getMessage();
            }
        }
    }
}

function validarLoginVoluntario(){
    return isset($_SESSION['nome']) && isset($_SESSION['senha']);
}

function sairLoginVoluntario(){
    $_SESSION = array();
    session_destroy();
    header('Location: ../controls/index.php');
}

function loginAdmin(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_URL);
        if(empty($senha)){
            return 'Preencha a senha!';
        }

        if(isset($senha)){

            $conn = conexao();
            if(!$conn){
                echo "Erro de conexão ao tentar realizar login!";
                return null;
            }
            try {
                $sql = "SELECT * FROM tbadmin WHERE senha = '$senha'";
                $query = mysqli_query($conn, $sql);
                $resultado = mysqli_num_rows($query);
                if($resultado == 1){ 
                    session_start();
                    // $_SESSION['nome'] = $resultado['nome'];
                    $_SESSION['senha'] = $senha;
                    header('Location: ../views/index.php ');
                }else if($resultado == 0){
                    return "Usuário ou senha inválidos!";
                }else if($resultado > 1){
                    return "Usuário bloqueado, entre em contado com o administrador do sistema!";
                }
            } catch (Exception $e) {
                return "Erro de SQL: " . $e->getMessage();
            }
        }
    }
}

function validarLoginAdmin(){
    return isset($_SESSION['senha']);
}

function sairLoginAdmin(){
    $_SESSION = array();
    session_destroy();
    header('Location: ../controls/index.php');
}