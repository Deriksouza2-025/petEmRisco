<?php
/**Função que verifica os dados de acesso para realizar login no sistema */
require_once '../function/conexao.php';
// 3. Validação dos dados
function verificarCadastro(){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if (empty($nome) || empty($email) || empty($senha)) {
        echo "Todos os campos são obrigatórios.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email inválido.";
    } else {
 
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        $conn = conexao();
        if ($conn->query($sql) === TRUE) {
            echo "Cadastro realizado com sucesso!";
            
        } else {
            echo "Erro ao cadastrar: " . $conn->error;
        }
    }
}

}


?>