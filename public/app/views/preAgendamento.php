<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
    <!-- <link href="../../../css/style.css" rel="stylesheet" /> -->
    <link href="../../../css/styles.css" rel="stylesheet" />
  </head>
  <body>
  <nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav" style="background-color: rgb(15, 165, 165);">
                    <div class="container">
                        <a class="navbar-brand text-light fs-4" href="#page-top"><strong>Bem vindo</strong></a>
                        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ms-auto">
                                <!-- <li class="nav-item mx-0 mx-lg-1">
                                    <a class="nav-link py-3 px-0 px-lg-3 text-light rounded" href="../views/index.php">
                                    <i class="bi bi-gear-wide-connected"></i><strong></strong></a>
                                </li> -->
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 text-light rounded fs-4" href="../views/agendamento.php"><strong>Agendar</strong></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
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
      box-shadow: 0px 0px 12px rgba(0,0,0,0.08);
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
<body>

  <div class="form-container">
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

</body>
</html>
           
  </body>
</html>