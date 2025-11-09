<?php
// require_once '../function/conexao.php';
// function agenda() {
//   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//   if (
//     empty($_POST['dataAgenda']) ||
//     empty($_POST['horaInicio']) ||
//     empty($_POST['nome'])
//   ) {
//     echo "❌ Por favor, preencha todos os campos!";
//   }

//   // Dados do formulário
//   $dataAgenda = $_POST['dataAgenda'];
//   $horaInicio = $_POST['horaInicio'];
//   $nome = $_POST['nome'];
//   $status = 'pendente';

//   // Consulta para verificar se já existe agendamento
//   $sqlVerifica = "SELECT * FROM agenda WHERE dataAgenda = '$dataAgenda' AND horaInicio = '$horaInicio'";
//   $resultado = query($sqlVerifica);

//   if (!$resultado) {
//     echo "❌ Erro ao consultar agendamentos.";
//   }

//   if (totalLinhas($resultado) > 0) {
//     echo "⛔ Este horário já está agendado. Escolha outro.";
//   }

//   // Inserção no banco
//   $sqlInserir = "INSERT INTO agenda (dataAgenda, horaInicio, nome, status)
//                  VALUES ('$dataAgenda', '$horaInicio', '$nome', '$status')";
//   $inserir = query($sqlInserir);

//   if (!$inserir) {
//     return "❌ Erro ao agendar. Tente novamente.";
//   }

//   return "✅ Consulta agendada com sucesso para <strong>$dataAgenda</strong> às <strong>$horaInicio</strong>!";
// }
// }

// require_once 'conexao.php';
// function agenda() {
//   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//   if (
//     empty($_POST['dataAgenda']) ||
//     empty($_POST['horaInicio']) ||
//     empty($_POST['nome'])
//   ) {
//     return "❌ Por favor, preencha todos os campos!";
//   }
//   $dataAgenda = $_POST['dataAgenda'];
//   $horaInicio = $_POST['horaInicio'];
//   $nome = $_POST['nome'];
//   $status = 'pendente';

//   $sqlVerifica = "SELECT * FROM agenda WHERE dataAgenda = '$dataAgenda' AND horaInicio = '$horaInicio'";
//   $resultado = query($sqlVerifica);
//   if (!$resultado) {
//     return "❌ Erro ao consultar agendamentos.";
//   }
//   if (totalLinhas($resultado) > 0) {
//     return "⛔ Este horário já está agendado. Escolha outro.";
//   }
//   $sqlInserir = "INSERT INTO agenda (dataAgenda, horaInicio, nome, status)
//                  VALUES ('$dataAgenda', '$horaInicio', '$nome', '$status')";
//   $inserir = query($sqlInserir);

//   if (!$inserir) {
//     return "❌ Erro ao agendar. Tente novamente.";
//   }

//   return "✅ Consulta agendada com sucesso para <strong>$dataAgenda</strong> às <strong>$horaInicio</strong>!";
// }
// }

?>
<?php
require_once '../function/manipularDados.php';
function agenda()
{
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dataAgenda = $_POST['dataAgenda'];
    $horaInicio = $_POST['horaInicio'];
    $nome = $_POST['nome'];

    $tabela = 'agenda';
    $campos = "dataAgenda, horaInicio, nome";
    $valores = "'$dataAgenda', '$horaInicio', '$nome'";
    $campoId = "horaInicio";
    $valorId = "'$horaInicio'";
    if (empty($dataAgenda) || empty($horaInicio) || empty($nome)) {
      echo "
      <div class='alert alert-danger mt-3'>
        <p class='lead text-center text-bg-black'>Preencha os campos!</p>
      </div>";
    } else if (seExiste($tabela, $campoId, $valorId) == 1) {
      echo "
      <div class='alert alert-danger mt-3'>
        <p class='lead text-center text-bg-black'>O usuário já existe!</p>
      </div>";
    } else {
      require_once '../function/tipoTabela.php';
    }
  }
}


?>