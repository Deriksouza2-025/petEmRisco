<p class="display-6 text-center alert alert-secondary mt-2">Atualização de Agendamento</p>
<form action="?tela=status" method="post" class="form-control p-5">
    <p class="lead">Formulário de atualização de agendamento, preencha com atenção os campos.</p>
    <div class="form-control mb-2">
        <label for="nome" class="form-label">Data</label>
        <input type="date" name="dataAgenda" id="dataAgenda" class="form-control ">
    </div>
    <div class="form-control">
    <!-- <div class="mb-3"> -->
    <label for="horaInicio" class="form-label">Horário</label>
    <input type="time" class="form-control" id="horaInicio" name="horaInicio">
    </div>
    <div class="form-control">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Emily Rihs">
    </div>
    </div>
    <div class="form-control">
     <!-- <div class="mb-3"> -->
            <label for="fone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="fone" name="fone" placeholder="Ex: (33)9 9999-9999">
        </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-custom">Agendar</button>
    </div>
</form>

<!-- <div class="alert alert-info mt-3">
    <p class="lead text-center text-bg-black">Cadastrado com sucesso!</p>
</div>
<div class="form-container">
    <div class="form-title">Atualizar de Horários</div>
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
        <div class="mb-3">
            <label for="fone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="fone" name="fone" placeholder="Ex: (33)9 9999-9999">
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-custom">Agendar</button>
        </div>
        <div>
            
        </div>
    </form>
</div> -->