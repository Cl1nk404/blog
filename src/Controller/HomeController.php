<?php
declare(strict_types=1);

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\PostRepository;
use App\Service\PostService;
use App\Infrastructure\SmartyFactory;

final class HomeController
{
    public function index(): void
    {
        $categoryRepo = new CategoryRepository();
        $postRepo = new PostRepository();
        $postService = new PostService($postRepo);

        $categories = $categoryRepo->findWithPosts();

        $data = [];

        foreach ($categories as $category) {
            $data[] = [
                'category' => $category,
                'posts' => $postService->getLatestForCategory(
                    $category->id,
                    3
                )
            ];
        }

        $smarty = SmartyFactory::create();
        $smarty->assign('categories', $data);
        $smarty->display('home.tpl');
    }
}
