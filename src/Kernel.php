<?php
declare(strict_types=1);

namespace App;

use App\Controller\HomeController;
use App\Controller\CategoryController;
use App\Controller\PostController;

final class Kernel
{
    public function handle(string $uri): void
    {
        $path = parse_url($uri, PHP_URL_PATH);

        switch (true) {
            case $path === '/':
                (new HomeController())->index();
                break;

            case preg_match('#^/category/(\d+)$#', $path, $matches):
                (new CategoryController())->show((int)$matches[1]);
                break;

            case preg_match('#^/post/(\d+)$#', $path, $matches):
                (new PostController())->show((int)$matches[1]);
                break;

            default:
                http_response_code(404);
                echo 'Page not found';
        }
    }
}
