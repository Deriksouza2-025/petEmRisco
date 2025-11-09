<?php
require_once '../function/manipularDados.php';
function listar_result_agenda_update()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $search = $_POST['searchAgenda'];
        try {
            $sql = "SELECT * FROM agenda  WHERE nome LIKE '%$search%'";
            if (!$conn = conexao()) {
                echo "Erro de conexão ao procurar uma cidade!";
                return null;
            }
            $qr = query($sql);
            $total = totalLinhas($qr);
            $contador = 0;
            for ($i = 0; $i <= $total; $i++) {
                $contador++;
                if ($dado = listarItens($qr)) {
                    echo "
                <tr>
                  <td>" . $dado['id'] . "</td>
                  <td>" . $dado['dataAgenda'] . "</td>
                  <td>" . $dado['horaInicio'] . "</td>
                  <td>" . $dado['nome'] . "</td>
                  <td>
                    <!-- Button trigger modal -->";
                    require './modal_confirmar_update_agenda.php';
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
