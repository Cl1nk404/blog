<?php
declare(strict_types=1);

namespace App\Controller;

use App\Repository\PostRepository;
use App\Service\PostService;
use App\Infrastructure\SmartyFactory;

final class PostController
{
    public function show(int $id): void
    {
        $postRepo = new PostRepository();
        $postService = new PostService($postRepo);

        $post = $postService->viewPost($id);

        if (!$post) {
            http_response_code(404);
            echo 'Post not found';
            return;
        }

        $similarPosts = $postService->getSimilar($id);

        $smarty = SmartyFactory::create();
        $smarty->assign('post', $post);
        $smarty->assign('similarPosts', $similarPosts);
        $smarty->display('post.tpl');
    }
}
