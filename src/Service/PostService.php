<?php
declare(strict_types=1);

namespace App\Service;

use App\Repository\PostRepository;
use App\Entity\Post;
use App\DTO\CategoryPostQuery;

final class PostService
{
    public function __construct(
        private PostRepository $repository
    ) {}

    public function getLatestForCategory(int $categoryId, int $limit = 3): array
    {
        $posts = $this->repository->findByCategory($categoryId);

        return array_slice($posts, 0, $limit);
    }

    public function getPopular(int $limit = 3): array
    {
        return $this->repository->findPopular($limit);
    }


    public function getById(int $id): ?Post
    {
        return $this->repository->findById($id);
    }

    public function viewPost(int $id): ?Post
    {
        $post = $this->repository->findById($id);

        if (!$post) {
            return null;
        }

        $this->repository->incrementViews($id);

        return $post;
    }

    public function getSimilar(int $postId, int $limit = 3): array
    {
        return $this->repository->findSimilar($postId, $limit);
    }


    public function getForCategory(
        int $categoryId,
        CategoryPostQuery $query
    ): array {
        $offset = ($query->page - 1) * $query->limit;

        $posts = $this->repository->findByCategoryPaginated(
            $categoryId,
            $query->limit,
            $offset,
            $query->sort
        );

        $total = $this->repository->countByCategory($categoryId);

        return [
            'posts' => $posts,
            'total' => $total,
            'page' => $query->page,
            'limit' => $query->limit
        ];
    }

}
