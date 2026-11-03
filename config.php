
<?php

$perfil = [
    'nome' => 'Crêncio Sitoe',
    'cargo' => 'Creative Director & Full Stack Developer',
    'empresa' => 'Aurore Agency',
    'descricao' => 'Transformo ideias em experiências digitais através do design, desenvolvimento web e produção audiovisual.',
    'localizacao' => 'Maputo, Moçambique',
    'telefone' => '+258834817243',
    'whatsapp' => '258846810719',
    'email' => 'crenciomateus@gmail.com',
    'website' => 'crencio.imagineskill.co.mz',
    'foto' => 'assets/img/perfil.jpg',
    'instagram' => 'https://instagram.com/',
    'linkedin' => 'https://linkedin.com/',
    'github' => 'https://github.com/',
];

$projectos = [
    [
        'titulo' => 'Identidade Visual',
        'categoria' => 'Branding',
        'imagem' => 'assets/img/projectos/projecto1.jpg',
        'descricao' => 'Desenvolvimento de identidade visual.'
    ],
    [
        'titulo' => 'Website Institucional',
        'categoria' => 'Web Development',
        'imagem' => 'assets/img/projectos/projecto2.jpg',
        'descricao' => 'Website moderno e responsivo.'
    ],
    [
        'titulo' => 'Produção Audiovisual',
        'categoria' => 'Audiovisual',
        'imagem' => 'assets/img/projectos/projecto3.jpg',
        'descricao' => 'Produção de conteúdo audiovisual.'
    ]
];

function e($valor) {
    return htmlspecialchars(
        (string) $valor,
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );
}
?>
