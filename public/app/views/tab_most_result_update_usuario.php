        <p class="display-6 text-center alert text-light mt-2" style="background-color:rgb(46, 41, 103);">Resultados Encontrados</p>
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Usuário</th>
                  <th>E-mail</th>
                  <th width='30px'></th>
                </tr>
              </thead>
              <tbody>
                <!-- Código da função listar_result_search.php -->
                 <?php require '../function/listar_result_usuario_update.php';
                 listar_result_usuario_update();
                 ?>
              </tbody>
            </table>
          </div>