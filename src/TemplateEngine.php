<?php
declare(strict_types=1);

class TemplateEngine {
    protected string $templateDir;

    public function __construct(string $templateDir) {
        $this->templateDir = $templateDir;
    }

    public function render(string $view, array $data = []): string {
        extract($data);
        ob_start();
        include $this->templateDir . '/' . $view . '.php';
        $content = ob_get_clean();

        // Recherche et remplacement des variables entre {{ }}
        preg_match_all('/{{\s*([a-zA-Z0-9_]+)\s*}}/', $content, $matches);
        foreach ($matches[1] as $match) {
            if (isset($$match)) {
                $content = str_replace('{{ ' . $match . ' }}', (string) $$match, $content);
            }
        }

        return $content;
    }
}
