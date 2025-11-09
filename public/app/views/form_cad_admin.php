<p class="display-6 text-center alert alert-secondary mt-2">Cadastro de Mensagens</p>
          <form action="?tela=status" method="post" class="form-control p-5">
            <p class="lead">Formulário de cadastro de mensagens, preencha com atenção os campos.</p>
            <div class="form-control mb-2">
              <input type="hidden" name="form" value='cadMensagem'>
              <input type="hidden" name="idForm" value="mensagem">
              <label for="titulo" class="form-label">Título</label>
              <input type="text" name="titulo" id="" class="form-control ">
            </div>
            <div class="form-control">
              <label for="subtitulo" class="form-label">Sub Título</label>
              <input type="text" name="subTitulo" id="" class="form-control">
            </div>
            <div class="form-control">
              <label for="desc" class="form-label">Descrição</label>
              <input type="text" name="desc" id="" class="form-control">
            </div>
            <div class="form-control">
              <label for="link" class="form-label">Link (url)</label>
              <input type="text" name="link" id="" class="form-control">
            </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-outline-secondary">Cadastrar</button>
            </div>
          </form>