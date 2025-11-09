<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Acadêmico</title>
    <!-- Link para gerar o Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- Link do CSS -->
     <link rel="stylesheet" href="../css/styles.css">
  </head>
  <body style="background-color:rgb(15, 165, 165);">
    <!-- Principal -->
     <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 min-vh-100 align-content-center mx-auto">
                    <form action="./index.php" method="post" class="p-3">
                        <p class="lead display-6 text-center mb-4 text-light">Faça o seu login.</p>
                        <div>
                            <label for="email" class="form-label lead text-light">E-mail</label>
                            <input type="email" class="form-control" name="email" placeholder="Digite o seu e-mail">
                        </div>
                        <div class="mt-2">
                            <label for="senha" class="form-label lead text-light">Senha</label>
                            <input type="password" class="form-control" name="senha" placeholder="Digite a sua senha">
                        </div>
                        <!-- <div class="mt-2">
                            <label for="senha" class="form-label lead text-light">Usuário</label>
                            <input type="password" class="form-control" name="senha" placeholder="Digite a sua senha">
                        </div> -->
                        <!-- <div class="text-end my-4">
                            <a href="" class="link-light link-underline link-underline-opacity-0 link-opacity-50-hover text-danger">Esqueci minha senha</a>
                        </div> -->
                        <div>
                            <button type="submit" class="btn  form-control my-3 text-light" style="background-color: rgb(17, 86, 86);">Entrar</button>
                        </div>
                        <div class="mt-4">
                            <p class="text-danger text-center"></p>
                           
                            
                                <?php
                                    require_once('../function/verificarLogin.php');
                                    echo verificarLogin();
                                ?>

                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>