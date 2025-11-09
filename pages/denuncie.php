<section class="container my-5 py-5" id="denuncie">
  <div class="text-center mb-5">
    <h2 class="text-uppercase fw-bold text-secondary">🚨 Denuncie um Caso de Maus-Tratos</h2>
    <p class="text-muted fs-5">Sua denúncia é **anônima** e pode salvar uma vida.</p>
  </div>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Simulação de processamento de dados (Mantenha a simulação aqui)
      $tipo = htmlspecialchars($_POST["tipo"] ?? 'N/A');
      $descricao = htmlspecialchars($_POST["descricao"] ?? 'N/A');
      $localizacao = htmlspecialchars($_POST["localizacao"] ?? 'N/A');
      $latitude = htmlspecialchars($_POST["latitude"] ?? 'N/A');
      $longitude = htmlspecialchars($_POST["longitude"] ?? 'N/A');
      $arquivo_nome = $_FILES["foto"]["name"] ?? 'Nenhuma';

      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
              <strong>Denúncia Registrada!</strong> Recebemos sua informação. 🐾<br>
              <small>Tipo: $tipo | Endereço: $localizacao | Arquivo: $arquivo_nome</small>
              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
      // Em produção, a lógica de mover arquivo e salvar no BD viria aqui.
  }
  ?>
  <form method="POST" enctype="multipart/form-data" class="bg-light p-4 p-md-5 rounded shadow-lg needs-validation" novalidate>
    <div class="row g-4 mb-4">
      <div class="col-md-6">
        <label for="tipo" class="form-label fw-bold">Tipo de Ocorrência <span class="text-danger">*</span></label>
        <select class="form-select form-select-lg" name="tipo" id="tipo" required aria-describedby="tipoHelp">
          <option value="" selected disabled>Selecione a categoria...</option>
          <option value="Maus-tratos">Maus-tratos (Agredir, Ferir)</option>
          <option value="Abandono">Abandono (Deixar o animal à própria sorte)</option>
          <option value="Negligência">Negligência (Falta de água, comida, abrigo)</option>
          <option value="Outros">Outros</option>
        </select>
        <div class="invalid-feedback">Por favor, selecione um tipo de ocorrência.</div>
        <small id="tipoHelp" class="form-text text-muted">Ajude a classificar o caso.</small>
      </div>

      <div class="col-md-6">
        <label for="localizacao" class="form-label fw-bold">Endereço do Ocorrido <span class="text-danger">*</span></label>
        <div class="input-group input-group-lg">
          <input type="text" class="form-control" name="localizacao" id="localizacao" placeholder="Rua, número e cidade..." required aria-describedby="locationStatus">
          <button type="button" id="btnGetLocation" class="btn btn-primary" title="Usar localização atual">
            <i class="fas fa-crosshairs me-1"></i> Localizar
          </button>
          <div class="invalid-feedback">Por favor, informe o endereço.</div>
        </div>
        <small id="locationStatus" class="form-text text-muted">Clique no botão azul para usar o GPS.</small>
      </div>
    </div>

    <input type="hidden" name="latitude" id="inputLatitude" aria-label="Latitude">
    <input type="hidden" name="longitude" id="inputLongitude" aria-label="Longitude">

    <div class="mb-4">
      <label for="descricao" class="form-label fw-bold">Detalhes da Ocorrência <span class="text-danger">*</span></label>
      <textarea class="form-control" name="descricao" id="descricao" rows="5" placeholder="Descreva o que está acontecendo: quem, o que, onde e quando." required></textarea>
      <div class="invalid-feedback">A descrição é fundamental para a denúncia.</div>
    </div>

    <div class="mb-5">
      <label for="foto" class="form-label fw-bold">Foto ou Vídeo (Opcional, mas muito útil)</label>
      <input class="form-control" type="file" id="foto" name="foto" accept="image/*,video/*">
      <small class="form-text text-muted">Arquivos de mídia ajudam a comprovar a denúncia.</small>
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-danger btn-lg px-5 py-3 fw-bold shadow-sm" aria-live="polite">
        <i class="fas fa-exclamation-triangle me-2"></i> Enviar Denúncia Anônima
      </button>
    </div>
  </form>

  <hr class="my-5">

  <div class="row g-4">
    <div class="col-md-6">
      <div class="p-4 bg-white rounded shadow border h-100">
        <h4 class="text-secondary fw-bold mb-3"><i class="fas fa-info-circle me-2"></i> Como Funciona?</h4>
        <ul class="list-unstyled fa-ul">
          <li><span class="fa-li"><i class="fas fa-check-circle text-success"></i></span> As denúncias são analisadas.</li>
          <li><span class="fa-li"><i class="fas fa-lock text-primary"></i></span> Suas informações são **confidenciais**.</li>
          <li><span class="fa-li"><i class="fas fa-map-marked-alt text-info"></i></span> Endereço e fotos agilizam o resgate.</li>
        </ul>
      </div>
    </div>

    <div class="col-md-6">
      <div class="p-4 bg-light rounded border h-100">
        <h4 class="fw-bold text-secondary mb-3"><i class="fas fa-phone-alt me-2"></i> Canais Urgentes</h4>
        <p>Se o caso for de risco imediato, ligue diretamente para os órgãos:</p>
        <ul class="list-unstyled">
          <li>**Polícia Militar:** 190 (Se houver perigo à vida)</li>
          <li>**Corpo de Bombeiros:** 193</li>
          <li>**Vigilância Sanitária:** (Busque o telefone da sua cidade)</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const btn = document.getElementById('btnGetLocation');
  const status = document.getElementById('locationStatus');
  const inputAddress = document.getElementById('localizacao');
  const inputLat = document.getElementById('inputLatitude');
  const inputLng = document.getElementById('inputLongitude');
  const form = document.querySelector('.needs-validation');

  // Adiciona a validação nativa do Bootstrap 5
  form.addEventListener('submit', function (event) {
    if (!form.checkValidity()) {
      event.preventDefault();
      event.stopPropagation();
    }
    form.classList.add('was-validated');
  }, false);


  // Lógica de Geolocalização
  btn.addEventListener('click', async (e) => {
    e.preventDefault();

    if (!navigator.geolocation) {
      status.textContent = '❌ Seu navegador não suporta geolocalização.';
      return;
    }

    // Desativa o botão e mostra carregamento
    btn.disabled = true;
    status.textContent = '⏳ Obtendo localização... Aguarde.';

    navigator.geolocation.getCurrentPosition(async (position) => {
      const lat = position.coords.latitude.toFixed(6);
      const lng = position.coords.longitude.toFixed(6);

      inputLat.value = lat;
      inputLng.value = lng;
      
      // API de geocodificação reversa (OpenStreetMap Nominatim)
      const url = `https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lng}&format=json`;

      try {
        const response = await fetch(url, {
          headers: { 'User-Agent': 'DenunciaAnimalApp/1.0' }
        });
        const data = await response.json();

        if (data && data.display_name) {
          inputAddress.value = data.display_name;
          status.textContent = '✅ Endereço detectado com sucesso!';
          inputAddress.focus(); // Foca no campo para o usuário conferir/editar
        } else {
          status.textContent = '⚠️ Coordenadas obtidas, mas endereço não identificado.';
        }
      } catch (error) {
        status.textContent = '❌ Erro ao obter endereço. Tente novamente ou digite manualmente.';
      } finally {
        btn.disabled = false; // Reativa o botão
      }

    }, (err) => {
      // Tratamento de Erro de Geolocalização
      let errorMessage = 'Erro desconhecido.';
      switch (err.code) {
        case err.PERMISSION_DENIED:
          errorMessage = 'Permissão negada. Ative o GPS nas configurações do navegador.';
          break;
        case err.POSITION_UNAVAILABLE:
          errorMessage = 'Localização indisponível. Sinal fraco.';
          break;
        case err.TIMEOUT:
          errorMessage = 'Tempo esgotado para obter localização.';
          break;
      }
      status.textContent = `❌ ${errorMessage}`;
      btn.disabled = false; // Reativa o botão
    }, { enableHighAccuracy: true, timeout: 10000, maximumAge: 0 }); // Configurações de precisão
  });
});
</script>