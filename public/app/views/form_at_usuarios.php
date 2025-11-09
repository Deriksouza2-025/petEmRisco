          <p class="display-6 text-center alert alert-secondary mt-2">Atualização de Usuários</p>
          <form action="" method="post" class="form-control p-5">
            <p class="lead">Formulário de atualização de Usuários, preencha com atenção os campos.</p>
            <div class="form-control mb-2">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" name="nome" id="" class="form-control ">
            </div>
            <div class="form-control">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" name="email" id="" class="form-control">
            </div>
            <div class="form-control">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" name="senha" id="" class="form-control">
            </div>
            <div class="form-control">
              <label for="situacao" class="form-label">Situação</label>
              <select name="situacao" id="" class="form-select">
                <option value=""></option>
                <option value="1">Ativo</option>
                <option value="0">Desativado</option>
              </select>
            </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-outline-secondary">Enviar</button>
            </div>
          </form>

          <div class="alert alert-info mt-3">
            <p class="lead text-center text-bg-black">Cadastrado com sucesso!</p>
          </div>