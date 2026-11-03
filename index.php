
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crêncio Sitoe | Digital Business Card</title>

    <meta name="description"
          content="Crêncio Sitoe — Creative Director & Full Stack Developer. Design, desenvolvimento web e produção audiovisual.">

    <meta name="theme-color" content="#101d25">

    <!-- Bootstrap -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <style>
        :root {
            --primary: #168a75;
            --primary-dark: #106c5c;
            --dark: #101d25;
            --muted: #75848d;
            --border: #e7edef;
            --background: #f4f7f8;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--background);
            color: var(--dark);
            font-family: 'DM Sans', sans-serif;
        }

        h1, h2, h3 {
            font-family: 'Outfit', sans-serif;
        }

        a {
            text-decoration: none;
        }

        .main-wrapper {
            max-width: 760px;
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 12px 55px rgba(0,0,0,.055);
        }

        /* CAPA */

        .cover {
            height: 190px;
            background: linear-gradient(125deg, #101d25, #16483f);
            position: relative;
            overflow: hidden;
        }

        .cover-top {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 25px;
            color: #b5e8d8;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .icon-button {
            border: 1px solid rgba(255,255,255,.2);
            background: rgba(255,255,255,.1);
            color: white;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            cursor: pointer;
        }

        .cover-decoration {
            position: absolute;
            width: 310px;
            height: 310px;
            border: 1px solid rgba(255,255,255,.12);
            border-radius: 50%;
            right: -70px;
            bottom: -220px;
            box-shadow:
                0 0 0 45px rgba(255,255,255,.025),
                0 0 0 95px rgba(255,255,255,.025);
        }

        /* PERFIL */

        .profile-section {
            position: relative;
            text-align: center;
            padding: 0 30px 35px;
        }

        .profile-photo {
            width: 118px;
            height: 118px;
            object-fit: cover;
            border-radius: 24px;
            border: 5px solid white;
            margin-top: -60px;
            position: relative;
            background: #e7edef;
            box-shadow: 0 10px 30px rgba(0,0,0,.12);
        }

        .profile-content {
            max-width: 460px;
            margin: 0 auto;
        }

        .availability {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: #e9f8f2;
            color: #147c60;
            padding: 7px 13px;
            border-radius: 30px;
            font-size: 11px;
            margin-top: 20px;
        }

        .status-dot {
            width: 7px;
            height: 7px;
            background: #20b878;
            border-radius: 50%;
        }

        .profile-content h1 {
            font-size: 32px;
            font-weight: 700;
            margin: 14px 0 3px;
        }

        .job-title {
            font-size: 14px;
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 12px;
        }

        .company, .location {
            font-size: 12px;
            color: var(--muted);
            margin-bottom: 6px;
        }

        .bio {
            font-size: 14px;
            line-height: 1.8;
            color: #62717a;
            margin: 22px 0;
        }

        /* BOTÕES */

        .btn {
            padding: 13px 18px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 700;
            transition: .25s ease;
        }

        .btn i {
            margin-right: 6px;
        }

        .btn-save {
            background: var(--primary);
            color: white;
            border: 1px solid var(--primary);
        }

        .btn-save:hover {
            background: var(--primary-dark);
            color: white;
            transform: translateY(-2px);
        }

        .btn-outline-custom {
            border: 1px solid var(--border);
            background: white;
            color: var(--dark);
        }

        .btn-outline-custom:hover {
            background: #edf7f4;
            border-color: var(--primary);
            color: var(--primary);
        }

        /* REDES SOCIAIS */

        .social-links {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 25px;
        }

        .social-links a {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--border);
            border-radius: 12px;
            color: var(--dark);
            transition: .2s;
        }

        .social-links a:hover {
            background: var(--dark);
            color: white;
            transform: translateY(-3px);
        }

        /* SECÇÕES */

        .content-section {
            padding: 35px 32px;
            border-top: 1px solid var(--border);
        }

        .eyebrow {
            font-size: 10px;
            color: var(--primary);
            font-weight: 800;
            letter-spacing: 2px;
        }

        .section-heading {
            margin-bottom: 23px;
        }

        .section-heading h2 {
            font-size: 25px;
            font-weight: 700;
            margin: 7px 0;
        }

        .section-heading p {
            color: var(--muted);
            font-size: 13px;
        }

        /* SERVIÇOS */

        .service-card {
            height: 100%;
            padding: 22px;
            border: 1px solid var(--border);
            border-radius: 15px;
            transition: .25s;
        }

        .service-card:hover {
            border-color: #a8d8cb;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,.04);
        }

        .service-card > i {
            font-size: 25px;
            color: var(--primary);
        }

        .service-card h3 {
            font-size: 15px;
            font-weight: 700;
            margin: 15px 0 8px;
        }

        .service-card p {
            font-size: 12px;
            line-height: 1.6;
            color: var(--muted);
            margin: 0;
        }

        /* PORTFÓLIO */

        .portfolio-filters {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .filter-btn {
            background: #f3f6f7;
            border: 0;
            padding: 9px 14px;
            border-radius: 9px;
            font-size: 11px;
            font-weight: 700;
            color: #64747d;
            cursor: pointer;
        }

        .filter-btn.active,
        .filter-btn:hover {
            background: var(--dark);
            color: white;
        }

        .project-card {
            height: 100%;
            border: 1px solid var(--border);
            border-radius: 15px;
            overflow: hidden;
            transition: .25s;
        }

        .project-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(0,0,0,.07);
        }

        .project-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            background: #e9edef;
        }

        .project-info {
            padding: 17px;
        }

        .project-info span {
            font-size: 10px;
            color: var(--primary);
            font-weight: 700;
        }

        .project-info h3 {
            font-size: 16px;
            margin: 7px 0;
            font-weight: 700;
        }

        .project-info p {
            color: var(--muted);
            font-size: 12px;
            margin: 0;
            line-height: 1.6;
        }

        /* PARTILHA */

        .share-card {
            text-align: center;
            padding: 30px;
            background: #f5f9f8;
            border-radius: 18px;
        }

        .share-card h2 {
            font-size: 24px;
            margin: 10px 0;
        }

        .share-card p {
            color: var(--muted);
            font-size: 13px;
        }

        #qrcode {
            display: flex;
            justify-content: center;
            margin: 25px 0 5px;
        }

        #qrcode img,
        #qrcode canvas {
            padding: 12px;
            background: white;
            border-radius: 12px;
            max-width: 100%;
            height: auto;
        }

        /* FOOTER */

        footer {
            text-align: center;
            padding: 28px;
            color: var(--muted);
            font-size: 12px;
        }

        footer p {
            margin-bottom: 4px;
        }

        footer small {
            font-size: 10px;
        }

        /* NOTIFICAÇÃO */

        .custom-toast {
            position: fixed;
            left: 50%;
            bottom: 25px;
            transform: translate(-50%, 30px);
            background: var(--dark);
            color: white;
            padding: 13px 20px;
            border-radius: 12px;
            font-size: 12px;
            opacity: 0;
            visibility: hidden;
            transition: .3s;
            z-index: 1000;
            text-align: center;
        }

        .custom-toast.show {
            opacity: 1;
            visibility: visible;
            transform: translate(-50%, 0);
        }

        /* MOBILE */

        @media (max-width: 576px) {
            body {
                background: white;
            }

            .container {
                padding: 0 !important;
            }

            .main-wrapper {
                border-radius: 0;
                box-shadow: none;
            }

            .cover {
                height: 170px;
            }

            .profile-section {
                padding: 0 22px 30px;
            }

            .profile-content h1 {
                font-size: 29px;
            }

            .content-section {
                padding: 30px 20px;
            }

            .service-card {
                padding: 17px;
            }

            .share-card {
                padding: 25px 18px;
            }
        }
    </style>
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

            <img src="perfil.jpg"
                 alt="Fotografia de Crêncio Sitoe"
                 class="profile-photo">

            <div class="profile-content">

                <div class="availability">
                    <span class="status-dot"></span>
                    Disponível para novos projectos
                </div>

                <h1>Crêncio Sitoe</h1>

                <p class="job-title">
                    Creative Director & Full Stack Developer
                </p>

                <p class="company">
                    <i class="bi bi-building"></i>
                    Aurore Agency
                </p>

                <p class="location">
                    <i class="bi bi-geo-alt"></i>
                    Maputo, Moçambique
                </p>

                <p class="bio">
                    Transformo ideias em experiências digitais
                    através do design, desenvolvimento web e
                    produção audiovisual.
                </p>

                <a href="contacto.vcf" download="Crencio_Sitoe.vcf"
                   class="btn btn-save w-100">
                    <i class="bi bi-person-plus-fill"></i>
                    Guardar contacto
                </a>

                <div class="row g-2 mt-2">

                    <div class="col-6">
                        <a href="https://wa.me/258846810719"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="btn btn-outline-custom w-100">
                            <i class="bi bi-whatsapp"></i>
                            WhatsApp
                        </a>
                    </div>

                    <div class="col-6">
                        <a href="mailto:crenciomateus@gmail.com"
                           class="btn btn-outline-custom w-100">
                            <i class="bi bi-envelope"></i>
                            Email
                        </a>
                    </div>

                </div>

                <div class="social-links">

                    <a href="https://www.instagram.com/crencio.mateus/"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="https://www.linkedin.com/in/cr%C3%AAncio-mateus-1bb6471aa/"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>

                    <a href="https://github.com/sitcren"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="GitHub">
                        <i class="bi bi-github"></i>
                    </a>

                    <a href="tel:+258834817243"
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

                <button class="filter-btn active" data-filter="todos">
                    Todos
                </button>

                <button class="filter-btn" data-filter="Branding">
                    Branding
                </button>

                <button class="filter-btn" data-filter="Web Development">
                    Web Development
                </button>

                <button class="filter-btn" data-filter="Audiovisual">
                    Audiovisual
                </button>

            </div>

            <div class="row g-3" id="projectGrid">

                <!-- PROJECTO 1 -->
                <div class="col-md-6 project-item"
                     data-category="Branding">

                    <article class="project-card">

                        <img src="projecto1.jpg"
                             alt="Identidade Visual"
                             loading="lazy">

                        <div class="project-info">
                            <span>Branding</span>
                            <h3>Identidade Visual</h3>
                            <p>Desenvolvimento de identidade visual.</p>
                        </div>

                    </article>
                </div>

                <!-- PROJECTO 2 -->
                <div class="col-md-6 project-item"
                     data-category="Web Development">

                    <article class="project-card">

                        <img src="projecto2.jpg"
                             alt="Website Institucional"
                             loading="lazy">

                        <div class="project-info">
                            <span>Web Development</span>
                            <h3>Website Institucional</h3>
                            <p>Website moderno e responsivo.</p>
                        </div>

                    </article>
                </div>

                <!-- PROJECTO 3 -->
                <div class="col-md-6 project-item"
                     data-category="Audiovisual">

                    <article class="project-card">

                        <img src="projecto3.jpg"
                             alt="Produção Audiovisual"
                             loading="lazy">

                        <div class="project-info">
                            <span>Audiovisual</span>
                            <h3>Produção Audiovisual</h3>
                            <p>Produção de conteúdo audiovisual.</p>
                        </div>

                    </article>
                </div>

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
            <p>© <span id="currentYear"></span> Crêncio Sitoe</p>
            <small>Powered by Smart NFC Card</small>
        </footer>

    </div>
</div>

<div id="toastMessage"
     class="custom-toast"
     role="status"
     aria-live="polite"></div>

<!-- QR CODE LIBRARY -->
<script src="https://cdn.jsdelivr.net/npm/qrcodejs@1.0.0/qrcode.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', () => {

    // ANO AUTOMÁTICO
    document.getElementById('currentYear').textContent =
        new Date().getFullYear();

    // FILTROS DO PORTFÓLIO
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectItems = document.querySelectorAll('.project-item');

    filterButtons.forEach(button => {

        button.addEventListener('click', () => {

            filterButtons.forEach(btn => {
                btn.classList.remove('active');
            });

            button.classList.add('active');

            const filter = button.dataset.filter;

            projectItems.forEach(item => {

                const category = item.dataset.category;

                if (filter === 'todos' || category === filter) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }

            });

        });

    });

    // LINK DO CARTÃO
    const cardUrl = new URL(
        window.location.pathname,
        window.location.origin
    ).href;

    // QR CODE
    const qrContainer = document.getElementById('qrcode');

    if (qrContainer && typeof QRCode !== 'undefined') {

        new QRCode(qrContainer, {
            text: cardUrl,
            width: 180,
            height: 180,
            colorDark: '#101d25',
            colorLight: '#ffffff',
            correctLevel: QRCode.CorrectLevel.H
        });

    }

    // NOTIFICAÇÕES
    let toastTimeout;

    function showToast(message) {

        const toast = document.getElementById('toastMessage');

        toast.textContent = message;
        toast.classList.add('show');

        clearTimeout(toastTimeout);

        toastTimeout = setTimeout(() => {
            toast.classList.remove('show');
        }, 3000);

    }

    // COPIAR LINK
    async function copyCardLink() {

        try {

            if (navigator.clipboard && window.isSecureContext) {

                await navigator.clipboard.writeText(cardUrl);

                showToast('Link copiado com sucesso!');

            } else {

                const input = document.createElement('textarea');

                input.value = cardUrl;
                input.style.position = 'fixed';
                input.style.opacity = '0';

                document.body.appendChild(input);

                input.select();

                const copied = document.execCommand('copy');

                document.body.removeChild(input);

                if (!copied) {
                    throw new Error('Falha ao copiar');
                }

                showToast('Link copiado com sucesso!');

            }

        } catch (error) {

            showToast('Não foi possível copiar o link.');

        }

    }

    // PARTILHAR
    async function shareCard() {

        const shareData = {
            title: document.title,
            text: 'Conheça o meu cartão digital e portfólio.',
            url: cardUrl
        };

        if (navigator.share) {

            try {
                await navigator.share(shareData);
            } catch (error) {

                if (error.name !== 'AbortError') {
                    showToast('Não foi possível partilhar.');
                }

            }

        } else {

            await copyCardLink();

        }

    }

    // EVENTOS
    document.getElementById('shareCard')
        ?.addEventListener('click', shareCard);

    document.getElementById('shareTop')
        ?.addEventListener('click', shareCard);

    document.getElementById('copyLink')
        ?.addEventListener('click', copyCardLink);

});
</script>

</body>
</html>
