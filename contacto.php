
<?php

require_once __DIR__ . '/config.php';

function escaparVCard($valor) {
    $valor = str_replace(
        ["\r\n", "\r"],
        "\n",
        (string) $valor
    );

    return str_replace(
        ["\\", "\n", ";", ","],
        ["\\\\", "\\n", "\\;", "\\,"],
        $valor
    );
}

function campoVCard($nome, $valor) {
    return $nome . ':' . escaparVCard($valor) . "\r\n";
}

$nome = trim($perfil['nome']);
$partes = preg_split('/\s+/', $nome);

$apelido = count($partes) > 1
    ? array_pop($partes)
    : '';

$nomes = implode(' ', $partes);

$vcard = "BEGIN:VCARD\r\n";
$vcard .= "VERSION:3.0\r\n";

$vcard .= campoVCard(
    'N',
    $apelido . ';' . $nomes . ';;;'
);

$vcard .= campoVCard('FN', $nome);
$vcard .= campoVCard('ORG', $perfil['empresa']);
$vcard .= campoVCard('TITLE', $perfil['cargo']);

$vcard .= campoVCard(
    'TEL;TYPE=CELL',
    $perfil['telefone']
);

$vcard .= campoVCard(
    'EMAIL;TYPE=INTERNET',
    $perfil['email']
);

$vcard .= campoVCard(
    'URL',
    $perfil['website']
);

$vcard .= campoVCard(
    'NOTE',
    $perfil['descricao']
);

$vcard .= "END:VCARD\r\n";

// Nome seguro para o ficheiro
$filename = 'contacto.vcf';

header('Content-Type: text/vcard; charset=utf-8');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Content-Length: ' . strlen($vcard));
header('Cache-Control: no-store');

echo $vcard;
exit;
?>
