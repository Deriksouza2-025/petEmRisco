         
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../../../css/styles.css">
  </head>
         <p class="display-6 text-center alert mt-2 text-light" style="background-color:rgb(46, 41, 103);">Cadastro de Usuários</p>
          <form action="?tela=status" method="post" class="form-control p-5">
            <p class="lead">Formulário de cadastro de Usuários, preencha com atenção os campos.</p>
            <div class="form-control mb-2">
              <input type="hidden" name="idForm" value="usuarios">
              <input type="hidden" name="form" value="cadUsuario">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" name="nome" id="" class="form-control ">
            </div>
            <div class="form-control">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" name="email" id="" class="form-control">
            </div>\
            <div class="form-control">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" name="senha" id="" class="form-control">
            </div>
            <div class="mt-2">
              <button type="submit" class="btn" style="background-color:rgb(15, 165, 165);" > Cadastrar</button>
            </div>
          </form>
</html>