<section class="container my-5">
    <?php
    // --- Array simulando o banco de dados ---
    $pets = [
        1 => [
            "nome" => "Thor",
            "idade" => "2 anos",
            "raca" => "Vira-lata",
            "descricao" => "Thor é uma cadelinha brincalhona e cheia de energia. Adora correr e se dar bem com outros pets.",
            "imagem" => "https://media.istockphoto.com/id/1285465107/pt/foto/loyal-golden-retriever-dog-sitting-on-a-green-backyard-lawn-looks-at-camera-top-quality-dog.jpg?s=2048x2048&w=is&k=20&c=yhomy8i_Oh7lyu4tX5FpsssPaUT2r8e5epgbpnZa1xM=",
            "usuario" => [
                "nome" => "Daniel de tal tal",
                "perfil" => "user=daniel"
            ]
        ],
        2 => [
            "nome" => "Mia",
            "idade" => "3 anos",
            "raca" => "Gatinha",
            "descricao" => "Mia é uma gata  dócil, companheiro e muito inteligente. Perfeito para famílias com crianças.",
            "imagem" => "https://media.istockphoto.com/id/104355461/pt/foto/vista-frontal-de-shorthair-cat-brit%C3%A2nico-7-meses-de-idade-sentado.jpg?s=2048x2048&w=is&k=20&c=HqWyeCFQoFGm-V49qQmosqhSD34ZyynKtr46m7X4evk=",
            "usuario" => [
                "nome" => "Carla Souza",
                "perfil" => "user=carla"
            ]
        ],
        3 => [
            "nome" => "Luna",
            "idade" => "1 ano",
            "raca" => "Gato Siamês",
            "descricao" => "Mia é uma gatinha carinhosa e tranquila, ideal para apartamentos.",
            "imagem" => "https://img.freepik.com/fotos-gratis/kitty-com-parede-monocromatica-atras-dela_23-2148955134.jpg?t=st=1762615996~exp=1762619596~hmac=4457b4457ada1563d9776a100d4128a76b540312050541fee1c30f650c8acec9&w=1480",
            "usuario" => [
                "nome" => "Pedro Silva",
                "perfil" => "user=pedro"
            ]
            ],
        4 => [
            "nome" => "Pretinha",
            "idade" => "1 ano",
            "raca" => "Gato Siamês",
            "descricao" => "Pretinha é uma gatinha carinhosa e tranquila, ideal para apartamentos.",
            "imagem" => "./assets/img/123.jpeg",
            "usuario" => [
                "nome" => "Barbara Santos",
                "perfil" => "user=pedro"
            ]
        ]
    ];

    // --- Pegando o ID pela URL ---
    $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

    // --- Verifica se o pet existe ---
    if (isset($pets[$id])) {
        $pet = $pets[$id];
        $urlPerfil = $_GET['id'];
        $urlCompartilhar = "https://pet-em-risco.rf.gd/?page=infoPet&id=" . $urlPerfil; // link completo para compartilhamento
        ?>
        <br>
        <div class="card shadow-lg border-0 rounded-4 overflow-hidden animate__animated animate__fadeIn ">
            <div class="row g-0">
                
                <div class="col-md-6 mt-4">
                    <img src="<?= $pet['imagem'] ?>" alt="<?= $pet['nome'] ?>" class="img-fluid h-100 w-100 object-fit-cover rounded-2 " >
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center p-5 bg-light">
                    <h2 class="fw-bold text-primary mb-3 text-secondary" ><?= htmlspecialchars($pet['nome']) ?></h2>
                    <p class="mb-1"><i class="bi bi-paw-fill text-warning me-2"></i><strong>Raça:</strong> <?= htmlspecialchars($pet['raca']) ?></p>
                    <p class="mb-1"><i class="bi bi-hourglass-split text-success me-2"></i><strong>Idade:</strong> <?= htmlspecialchars($pet['idade']) ?></p>
                    <p class="mt-3 text-secondary"><?= htmlspecialchars($pet['descricao']) ?></p>

                    <div class="mt-4 d-flex align-items-center">
                        <img width="50" class="rounded-circle me-3 border" src="https://www.shutterstock.com/image-vector/default-avatar-profile-icon-social-600nw-1906669723.jpg" alt="imagem do usuário">
                        <div>
                            <a href="<?= $urlPerfil ?>" class="fw-semibold text-decoration-none text-dark"><?= htmlspecialchars($pet['usuario']['nome']) ?></a><br>
                            <small class="text-muted">Cuidador(a)</small>
                        </div>
                    </div>

                    <!-- Botões de Compartilhamento -->
                    <div class="mt-4">
                        <h6 class="fw-bold mb-2 text-secondary">Compartilhar:</h6>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($urlCompartilhar) ?>" target="_blank" class="btn btn-outline-primary btn-sm me-2">
                            <i class="bi bi-facebook"></i> Facebook
                        </a>
                        <a href="https://api.whatsapp.com/send?text=Olhe%20este%20pet%20que%20encontrei!%20<?= urlencode($urlCompartilhar) ?>" target="_blank" class="btn btn-outline-success btn-sm me-2">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                        <a href="https://twitter.com/intent/tweet?text=Conheça%20<?= urlencode($pet['nome']) ?>%20no%20perfil%20de%20<?= urlencode($pet['usuario']['nome']) ?>&url=<?= urlencode($urlCompartilhar) ?>" target="_blank" class="btn btn-outline-info btn-sm">
                            <i class="bi bi-twitter"></i> Twitter
                        </a>
                    </div>

                    <a href="?page=home#card" class="btn btn-outline-primary mt-4 w-50">
                        <i class="bi bi-arrow-left"></i> Adotar
                    </a>
                </div>
            </div>
        </div>

        <style>
            .object-fit-cover {
                object-fit: cover;
            }
            .card {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            .card:hover {
                transform: scale(1.02);
                box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.2);
            }
            .btn-outline-primary, .btn-outline-success, .btn-outline-info {
                border-radius: 20px;
            }
        </style>

        <!-- Bootstrap Icons e animações -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <?php
    } else {
        echo "<div class='alert alert-danger shadow-lg rounded-3 p-4 text-center mt-5'>
                <i class='bi bi-exclamation-triangle-fill me-2'></i> Pet não encontrado.
              </div>";
    }
    ?>
</section>
