<section class="container my-5">
  <div class="text-center mb-4">
    <h3 class="fw-bold text-secondary">Cadastro do Usuário</h3>
    <p class="text-muted">Preencha suas informações para continuar.</p>
  </div>

  <!-- Barra de Progresso -->
  <div class="progress mb-4" role="progressbar" aria-label="Progresso do cadastro" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
    <div id="progressBar" class="progress-bar progress-bar-animated bg-success" style="width: 50%">Etapa 1 de 2</div>
  </div>

  <!-- Formulário -->
  <form id="cadastroForm">
    <!-- Etapa 1 -->
    <div id="step1">
      <h5 class="fw-bold text-primary mb-3">Informações do Pet</h5>
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Digite o nome do pet" required>
      </div>
      <div class="mb-3">
        <label for="idade" class="form-label">Idade</label>
        <input type="number" class="form-control" id="idade" placeholder="Digite a idade do pet" required>
      </div>
      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <textarea id="descricao" class="form-control" rows="3" placeholder="Descreva o pet" required></textarea>
      </div>

      <div class="text-end">
        <button type="button" class="btn btn-primary" id="nextBtn">Próximo</button>
      </div>
    </div>

    <!-- Etapa 2 -->
    <div id="step2" style="display: none;">
      <h5 class="fw-bold text-primary mb-3">Endereço</h5>
      <div class="mb-3">
        <label for="rua" class="form-label">Rua</label>
        <input type="text" class="form-control" id="rua" placeholder="Digite o nome da rua" required>
      </div>
      <div class="mb-3">
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="cidade" placeholder="Digite sua cidade" required>
      </div>
      <div class="mb-3">
        <label for="estado" class="form-label">Estado</label>
        <input type="text" class="form-control" id="estado" placeholder="Digite seu estado" required>
      </div>

      <div class="d-flex justify-content-between">
        <button type="button" class="btn btn-secondary" id="backBtn">Voltar</button>
        <button type="submit" class="btn btn-success">Enviar</button>
      </div>
    </div>
  </form>
</section>

<!-- Script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  const nextBtn = document.getElementById("nextBtn");
  const backBtn = document.getElementById("backBtn");
  const step1 = document.getElementById("step1");
  const step2 = document.getElementById("step2");
  const progressBar = document.getElementById("progressBar");
  const form = document.getElementById("cadastroForm");

  // Avançar para etapa 2
  nextBtn.addEventListener("click", () => {
    const nome = document.getElementById("nome").value.trim();
    const idade = document.getElementById("idade").value.trim();
    const descricao = document.getElementById("descricao").value.trim();

    if (!nome || !idade || !descricao) {
      Swal.fire({
        icon: "warning",
        title: "Campos obrigatórios",
        text: "Por favor, preencha todas as informações do pet antes de continuar.",
        confirmButtonColor: "#3085d6",
      });
      return;
    }

    step1.style.display = "none";
    step2.style.display = "block";
    progressBar.style.width = "100%";
    progressBar.textContent = "Etapa 2 de 2";
  });

  // Voltar para etapa 1
  backBtn.addEventListener("click", () => {
    step2.style.display = "none";
    step1.style.display = "block";
    progressBar.style.width = "50%";
    progressBar.textContent = "Etapa 1 de 2";
  });

  // Enviar formulário
  form.addEventListener("submit", (e) => {
    e.preventDefault();

    Swal.fire({
      title: "Confirmar envio?",
      text: "Deseja realmente enviar o cadastro do pet?",
      icon: "question",
      showCancelButton: true,
      confirmButtonText: "Sim, enviar",
      cancelButtonText: "Cancelar",
      confirmButtonColor: "#198754",
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          icon: "success",
          title: "Cadastro enviado!",
          text: "O pet foi cadastrado com sucesso.",
          confirmButtonColor: "#198754",
        });

        form.reset();
        step2.style.display = "none";
        step1.style.display = "block";
        progressBar.style.width = "50%";
        progressBar.textContent = "Etapa 1 de 2";
      }
    });
  });
</script>
