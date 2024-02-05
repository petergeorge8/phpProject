<?php

declare(strict_types=1);

namespace App;

class View
{
    public function __construct(
        protected String $view,
        protected $params = []
    ) {
    }

    public static function make(String $view, array $params = []): string
    {
        return (new static($view, $params))->render();
    }
    public function render(): string
    {
        if (!empty($this->params)) {
            extract($this->params);
        }

        $content_path = VIEWS_DIR . $this->view . ".php";
        if (!file_exists($content_path)) {
            // View::make("Exceptions/notfound");
            Exceptions\NotFound::notFoundPage();
        }

        ob_start();
        include($content_path);  // Include the content file
        $content = ob_get_flush();
        ob_get_clean();


        $layout_path = VIEWS_DIR . "Template/layout.php";
        if (!file_exists($layout_path)) {
            // View::make("Exceptions/notfound");
            Exceptions\NotFound::notFoundPage();
        }

        ob_start();
        include($layout_path);  // Include the layout file
        $output = ob_get_flush();
        return $output;
    }
}
