<?php
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

abstract class BaseController {
    protected $twig;

    public function __construct() {
        $loader = new FilesystemLoader(__DIR__ . '/../templates');
        $this->twig = new Environment($loader, [
            'cache' => __DIR__ . '/../var/cache',
        ]);
    }

    protected function render($view, $parameters = []) {
        return $this->twig->render($view, $parameters);
    }
}