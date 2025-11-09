<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Agendamento de Horários</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f5f7fa;
    }

    .form-container {
      max-width: 600px;
      margin: 50px auto;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.08);
    }

    .form-title {
      background-color: #2e2967;
      color: white;
      padding: 15px;
      border-radius: 8px;
      text-align: center;
      margin-bottom: 25px;
      font-size: 1.5rem;
    }

    .btn-custom {
      background-color: #0fa5a5;
      color: white;
    }

    .btn-custom:hover {
      background-color: #0c8e8e;
    }
  </style>
</head>
<div class="form-container">
  <div class="col mt-4">
    <div class="form-title">Agendamento de Horários</div>
    <form action="?tela=status" method="POST">
      <input type="hidden" name="form" value="cadAgendamento">
      <input type="hidden" name="idForm" value="cadAgendamento">
      <div class="mb-3">
        <label for="dataAgenda" class="form-label">Data</label>
        <input type="date" class="form-control" id="dataAgenda" name="dataAgenda">
      </div>
      <div class="mb-3">
        <label for="horaInicio" class="form-label">Horário</label>
        <input type="time" class="form-control" id="horaInicio" name="horaInicio">
      </div>
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Emily Rihs">
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-custom">Agendar</button>
      </div>
      <div>
        <?php
        require_once('../function/agenda.php');
        echo agenda();
        ?>
      </div>
    </form>
  </div>
</div>

</body>

</html>