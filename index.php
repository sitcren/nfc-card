
<?php
require_once __DIR__ . '/config.php';

$whatsapp = preg_replace('/\D+/', '', $perfil['whatsapp']);
$telefone = preg_replace('/[^\d+]/', '', $perfil['telefone']);
$categorias = array_unique(array_column($projectos, 'categoria'));
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title><?= e($perfil['nome']) ?> | Digital Card</title>

    <meta name="description"
          content="<?= e($perfil['descricao']) ?>">

    <meta name="theme-color" content="#101d25">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<div class="container py-4 py-md-5">

    <div class="main-wrapper mx-auto">

        <!-- CAPA -->
        <div class="cover">
            <div class="cover-top">
                <span>
                    <i class="bi bi-broadcast"></i>
                    SMART DIGITAL CARD
                </span>
                <button class="icon-button" id="shareTop"
                        aria-label="Partilhar cartão">
                    <i class="bi bi-share"></i>
                </button>
            </div>

            <div class="cover-decoration"></div>
        </div>

        <!-- PERFIL -->
        <section class="profile-section">

            <img src="<?= e($perfil['foto']) ?>"
                 alt="Fotografia de <?= e($perfil['nome']) ?>"
                 class="profile-photo">

            <div class="profile-content">

                <div class="availability">
                    <span class="status-dot"></span>
                    Disponível para novos projectos
                </div>

                <h1><?= e($perfil['nome']) ?></h1>

                <p class="job-title">
                    <?= e($perfil['cargo']) ?>
                </p>

                <p class="company">
                    <i class="bi bi-building"></i>
                    <?= e($perfil['empresa']) ?>
                </p>

                <p class="location">
                    <i class="bi bi-geo-alt"></i>
                    <?= e($perfil['localizacao']) ?>
                </p>

                <p class="bio">
                    <?= e($perfil['descricao']) ?>
                </p>

                <a href="contacto.php"
                   class="btn btn-save w-100">
                    <i class="bi bi-person-plus-fill"></i>
                    Guardar contacto
                </a>

                <div class="row g-2 mt-2">

                    <div class="col-6">
                        <a href="https://wa.me/<?= e($whatsapp) ?>"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="btn btn-outline-custom w-100">
                            <i class="bi bi-whatsapp"></i>
                            WhatsApp
                        </a>
                    </div>

                    <div class="col-6">
                        <a href="mailto:<?= e($perfil['email']) ?>"
                           class="btn btn-outline-custom w-100">
                            <i class="bi bi-envelope"></i>
                            Email
                        </a>
                    </div>

                </div>

                <div class="social-links">

                    <a href="<?= e($perfil['instagram']) ?>"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="<?= e($perfil['linkedin']) ?>"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>

                    <a href="<?= e($perfil['github']) ?>"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="GitHub">
                        <i class="bi bi-github"></i>
                    </a>

                    <a href="tel:<?= e($telefone) ?>"
                       aria-label="Ligar">
                        <i class="bi bi-telephone"></i>
                    </a>

                </div>
            </div>
        </section>

        <!-- SERVIÇOS -->
        <section class="content-section">
            <div class="section-heading">
                <span class="eyebrow">O QUE FAÇO</span>
                <h2>Os meus serviços</h2>
            </div>

            <div class="row g-3">

                <div class="col-6">
                    <div class="service-card">
                        <i class="bi bi-palette"></i>
                        <h3>Design Gráfico</h3>
                        <p>Identidade visual e comunicação.</p>
                    </div>
                </div>

                <div class="col-6">
                    <div class="service-card">
                        <i class="bi bi-code-slash"></i>
                        <h3>Web Development</h3>
                        <p>Websites e aplicações web.</p>
                    </div>
                </div>

                <div class="col-6">
                    <div class="service-card">
                        <i class="bi bi-camera-video"></i>
                        <h3>Audiovisual</h3>
                        <p>Vídeo e produção de conteúdos.</p>
                    </div>
                </div>

                <div class="col-6">
                    <div class="service-card">
                        <i class="bi bi-megaphone"></i>
                        <h3>Branding</h3>
                        <p>Estratégia e presença de marca.</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- PORTFÓLIO -->
        <section class="content-section" id="portfolio">

            <div class="section-heading">
                <span class="eyebrow">TRABALHOS</span>
                <h2>Portfólio</h2>
                <p>Alguns projectos em que trabalhei.</p>
            </div>

            <div class="portfolio-filters mb-4">
                <button class="filter-btn active"
                        data-filter="todos">
                    Todos
                </button>

                <?php foreach ($categorias as $categoria): ?>
                    <button class="filter-btn"
                            data-filter="<?= e($categoria) ?>">
                        <?= e($categoria) ?>
                    </button>
                <?php endforeach; ?>
            </div>

            <div class="row g-3" id="projectGrid">

                <?php foreach ($projectos as $projecto): ?>

                    <div class="col-md-6 project-item"
                         data-category="<?= e($projecto['categoria']) ?>">

                        <article class="project-card">

                            <img src="<?= e($projecto['imagem']) ?>"
                                 alt="<?= e($projecto['titulo']) ?>"
                                 loading="lazy">

                            <div class="project-info">
                                <span>
                                    <?= e($projecto['categoria']) ?>
                                </span>

                                <h3>
                                    <?= e($projecto['titulo']) ?>
                                </h3>

                                <p>
                                    <?= e($projecto['descricao']) ?>
                                </p>
                            </div>

                        </article>
                    </div>

                <?php endforeach; ?>

            </div>
        </section>

        <!-- PARTILHAR -->
        <section class="content-section">
            <div class="share-card">

                <span class="eyebrow">NETWORKING</span>

                <h2>Vamos conectar-nos?</h2>

                <p>
                    Guarda o meu contacto ou partilha
                    este cartão com alguém.
                </p>

                <div id="qrcode"></div>

                <button id="shareCard"
                        class="btn btn-save w-100 mt-4">
                    <i class="bi bi-share"></i>
                    Partilhar cartão
                </button>

                <button id="copyLink"
                        class="btn btn-outline-custom w-100 mt-2">
                    <i class="bi bi-link-45deg"></i>
                    Copiar link
                </button>

            </div>
        </section>

        <footer>
            <p>
                © <?= date('Y') ?>
                <?= e($perfil['nome']) ?>
            </p>
            <small>Powered by Smart NFC Card</small>
        </footer>

    </div>
</div>

<div id="toastMessage" class="custom-toast"
     role="status" aria-live="polite"></div>

<script src="https://cdn.jsdelivr.net/npm/qrcodejs@1.0.0/qrcode.min.js"></script>
<script src="assets/js/app.js"></script>

</body>
</html>
