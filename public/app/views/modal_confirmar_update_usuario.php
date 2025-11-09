                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModalUpUsuario<?php echo $i;?>">
                    <i class="bi bi-pencil"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalUpUsuario<?php echo $i;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="display-6 text-center alert alert-secondary mt-2">Atualizar Usuário</p>
                            <form action="../function/update.php" method="post" class="form-control p-5">
                                <div class="form-control mb-2">
                                    <input type="hidden" name="idForm" value="usuario">
                                    <input type="hidden" name="id" value="<?php echo $dado['id'];?>">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input type="text" name="nome" class="form-control" value="<?php echo $dado['nome'];?>">
                                </div>
                                <div class="form-control">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $dado['email'];?>">
                                </div>
                                <div class="form-control">
                                    <label for="senha" class="form-label">Senha</label>
                                    <input type="password" name="senha" class="form-control" value="<?php echo $dado['senha'];?>">
                                </div>
                                <div class="form-control">
                                <label for="situacao" class="form-label">Situação</label>
                                <select name="situacao" id="" class="form-select">
                                    <option value="<?php echo $dado['situacao'];?>"><?php echo $dado['situacao'];?></option>
                                    <option value="1">Ativo</option>
                                    <option value="0">Desativado</option>
                                </select>
                                </div>
                                <div class="mt-2">
                                <button type="submit" class="btn btn-outline-secondary">Atualizar</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>