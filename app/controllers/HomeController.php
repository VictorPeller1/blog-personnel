<?php
declare(strict_types=1);

require_once __DIR__ . '/../../src/TemplateEngine.php';

class HomeController {
    public function index() {
        $templateEngine = new TemplateEngine(__DIR__ . '/../views/home');
        echo $templateEngine->render('index', ['message' => 'JCVD QUADRUPLE IMPAKT !!!!!']);
    }
}
