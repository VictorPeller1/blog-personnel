<?php

declare(strict_types=1);

$routerPath = __DIR__ . '/../core/Router.php';
$homeTemplatePath = __DIR__ . '/../templates/home.php';

require_once($routerPath);


$data = [
    'title' => 'Blog Personnel JCVD QUADRUPLE IMPAKT',
    'heading' => 'Bienvenue sur le blog personnel de JCVD QUADRUPLE IMPAKT',
    'content' => "Plongez dans l'univers singulier de JCVD QUADRUPLE IMPAKT, où les limites de l'ordinaire sont constamment repoussées. Ce blog personnel est un sanctuaire de pensées non censurées, d'idées provocatrices et d'histoires inattendues. Attendez-vous à être transporté dans un tourbillon d'expériences où la réalité et la fiction se fondent, créant un paysage tumultueux de réflexions, d'aventures et de révélations."
];

include $homeTemplatePath;
