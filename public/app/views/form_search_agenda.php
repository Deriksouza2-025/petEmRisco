<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sessão 05 - Aula 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container justify-content-center">
        <div class="row">
            <div class="col">
                <p class="display-6 text-center alert text-light mt-2" style="background-color:rgb(46, 41, 103);">Agendamentos</p>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 text-light rounded fs-4 text-dark" href="../views/tela_agenda.php"><i class="bi bi-arrow-return-left"></i></a></li>
                </ul>
                <form action="" method="post" class="form-control p-5">

                    <p class="lead">Informe parte ou o item que deseja procurar!</p>
                    <div class="form-control mb-2">
                        <input type="hidden" name="idForm" value="searchAgenda">
                        <label for="nome" class="form-label"></label>
                        <input type="searchAgenda" name="searchAgenda" class="form-control ">
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn text-light" style="background-color:rgb(15, 165, 165);">Procurar</button>

                    </div>
                </form>
                <!-- Tabela para mostrar os resultados -->
                <?php require './tab_most_agenda.php'; ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>