<?php

/**Função que lista os resultados encontrados para apagar*/
require_once '../function/manipularDados.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    /**Função que lista os usuários */
    if ($_POST['idForm'] == 'searchUsuario') {
        /**Receber o dado a ser procurado */
        $search = $_POST['search'];
        try {
            $sql = "SELECT * FROM usuarios  WHERE nome LIKE '%$search%' OR email LIKE '%$search%'";
            if (!$conn = conexao()) {
                echo "Erro de conexão ao procurar uma cidade!";
                return null;
            }
            $qr = mysqli_query($conn, $sql);
            $total = mysqli_num_rows($qr);
            $contador = 0;
            for ($i = 0; $i <= $total; $i++) {
                $contador++;
                if ($dados = mysqli_fetch_assoc($qr)) {
                    echo "
                <tr>
                  <td>" . $dados['id'] . "</td>
                  <td>" . $dados['nome'] . "</td>
                  <td>" . $dados['email'] . "</td>
                  <td>
                    <!-- Modal para confirmar a exclusão -->
                    <!-- Button trigger modal -->";
                    require './modal_confirmar_apagar_usuario.php';
                    "</td>
                </tr>
                ";
                }
            }
        } catch (Exception $e) {
            echo "Erro de SQL: " . $e->getMessage();
        }
    }
    if ($_POST['idForm'] == 'searchAgenda') {

        
        try {
            if (!$conn = conexao()) {
                echo "Erro de conexão ao procurar um agendamento!";
                return null;
            }
            $search = $_POST['search'];
            $sql = "SELECT * FROM agenda  WHERE nome LIKE '%$search%'";
            $qr = mysqli_query($conn, $sql);
            $total = mysqli_num_rows($qr);
            $contador = 0;
            for ($i = 0; $i <= $total; $i++) {
                $contador++;
                if ($dados = mysqli_fetch_assoc($qr)) {
                    echo "
            <tr>
              <td>" . $dados['id'] . "</td>
              <td>" . $dados['dataAgenda'] . "</td>
              <td>" . $dados['horaInicio'] . "</td>
              <td>" . $dados['nome'] . "</td>
              
              <td>
                <!-- Modal para confirmar a exclusão -->
                <!-- Button trigger modal -->";
                    require './modal_confirmar_apagar_agenda.php';
                    "</td>
            </tr>
            ";
                }
            }
        } catch (Exception $e) {
            echo "Erro de SQL: " . $e->getMessage();
        }
    }
}
