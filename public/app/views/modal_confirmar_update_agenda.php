<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModalUpAgenda<?php echo $i; ?>">
    <i class="bi bi-pencil"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalUpAgenda<?php echo $i; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="display-6 text-center alert alert-secondary mt-2">Atualizar Agenda</p>
                <form action="../function/update.php" method="post" class="form-control p-5">
                    <div class="form-control mb-2">
                        <input type="hidden" name="idForm" value="agenda">
                        <input type="hidden" name="id" value="<?php echo $dado['id']; ?>">
                        <label for="dataAgenda" class="form-label">Data</label>
                        <input type="date" name="dataAgenda" class="form-control" value="<?php echo $dado['dataAgenda']; ?>">
                    </div>
                    <div class="form-control">
                        <label for="horaInicio" class="form-label">Horário</label>
                        <input type="time" name="horaInicio" class="form-control" value="<?php echo $dado['horaInicio']; ?>">
                    </div>
                    <div class="form-control">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" value="<?php echo $dado['nome']; ?>">
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-outline-secondary">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>