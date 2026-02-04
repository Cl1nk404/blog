<?php
declare(strict_types=1);

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Infrastructure\SmartyFactory;
use App\Repository\PostRepository;
use App\Service\PostService;
use App\DTO\CategoryPostQuery;


final class CategoryController
{
    public function show(int $id): void
    {
        $categoryRepo = new CategoryRepository();
        $postRepo = new PostRepository();
        $postService = new PostService($postRepo);

        $category = $categoryRepo->findById($id);

        if (!$category) {
            http_response_code(404);
            echo 'Category not found';
            return;
        }

        $query = new CategoryPostQuery(
            page: (int)($_GET['page'] ?? 1),
            sort: $_GET['sort'] ?? 'date'
        );

        $result = $postService->getForCategory($id, $query);

        $smarty = SmartyFactory::create();
        $smarty->assign('category', $category);
        $smarty->assign('posts', $result['posts']);
        $smarty->assign('total', $result['total']);
        $smarty->assign('page', $result['page']);
        $smarty->assign('limit', $result['limit']);
        $smarty->assign('sort', $query->sort);
        $smarty->display('category.tpl');
    }
}
