<?php
require_once '../function/manipularDados.php';
function listar_result_usuario_update(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $search = $_POST['search'];
        try {
            $sql = "SELECT * FROM usuarios  WHERE nome LIKE '%$search%' OR email LIKE '%$search%'";
            if(!$conn = conexao()){
                echo "Erro de conexão ao procurar uma cidade!";
                return null;
            }
            $qr = query($sql);
            $total = totalLinhas($qr);
            $contador = 0;
            for($i = 0; $i <= $total; $i++){
                $contador++;
                if($dado = listarItens($qr)){
                echo "
                <tr>
                  <td>".$dado['id']."</td>
                  <td>".$dado['nome']."</td>
                  <td>".$dado['email']."</td>
                  <td>
                    <!-- Modal para confirmar a exclusão -->
                    <!-- Button trigger modal -->";
                    require './modal_confirmar_update_usuario.php';
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