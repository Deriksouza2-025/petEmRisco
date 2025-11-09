          <p class="display-6 text-center alert text-light mt-2"  style="background-color:rgb(46, 41, 103);">Atualizar Usuário</p>
          <form action="" method="post" class="form-control p-5">
            <p class="lead">Informe parte ou o item que deseja procurar para atualizar!</p>
            <div class="form-control mb-2">
              <input type="hidden" name="idForm" value="searchUsuario">
              <label for="nome" class="form-label">O que deseja atualizar?</label>
              <input type="search" name="search" class="form-control ">
            </div>
            <div class="mt-2">
              <button type="submit" class="btn text-light" style="background-color:rgb(15, 165, 165);">Procurar</button>
            </div>
          </form>
          
          <!-- Tabela para mostrar os resultados -->
           <?php require './tab_most_result_update_usuario.php';?>