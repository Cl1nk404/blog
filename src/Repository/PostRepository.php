<?php
declare(strict_types=1);

namespace App\Repository;

use App\Entity\Post;
use App\Infrastructure\Database;
use PDO;

final class PostRepository
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }


    # Последние статьи (по дате)

    public function findLatest(int $limit): array
    {
        $stmt = $this->db->prepare(
            'SELECT * FROM posts
             ORDER BY created_at DESC
             LIMIT :limit'
        );

        $stmt->bindValue('limit', $limit, PDO::PARAM_INT);
        $stmt->execute();

        return $this->mapRowsToPosts($stmt->fetchAll());
    }

    
    # Статьи по категории
     
    public function findByCategory(int $categoryId): array
    {
        $stmt = $this->db->prepare(
            'SELECT p.*
             FROM posts p
             JOIN post_category pc ON pc.post_id = p.id
             WHERE pc.category_id = :categoryId
             ORDER BY p.created_at DESC'
        );

        $stmt->execute(['categoryId' => $categoryId]);

        return $this->mapRowsToPosts($stmt->fetchAll());
    }

    # Самая популярная статья
    public function findPopular(int $limit): array
    {
        $stmt = $this->db->prepare(
            'SELECT * FROM posts
             ORDER BY views DESC
             LIMIT :limit'
        );

        $stmt->bindValue('limit', $limit, PDO::PARAM_INT);
        $stmt->execute();

        return $this->mapRowsToPosts($stmt->fetchAll());
    }


    private function mapRowsToPosts(array $rows): array
    {
        return array_map(
            fn(array $row) => new Post(
                $row['id'],
                $row['title'],
                $row['description'],
                $row['text'],
                $row['image'],
                (int)$row['views'],
                $row['created_at']
            ),
            $rows
        );
    }


    public function findById(int $id): ?Post
    {
        $stmt = $this->db->prepare(
            'SELECT * FROM posts WHERE id = :id'
        );

        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch();

        if (!$row) {
            return null;
        }

        return new Post(
            $row['id'],
            $row['title'],
            $row['description'],
            $row['text'],
            $row['image'],
            (int)$row['views'],
            $row['created_at']
        );
    }


    public function incrementViews(int $id): void
    {
        $stmt = $this->db->prepare(
            'UPDATE posts SET views = views + 1 WHERE id = :id'
        );

        $stmt->execute(['id' => $id]);
    }


    public function findSimilar(int $postId, int $limit = 3): array
    {
        $stmt = $this->db->prepare(
            'SELECT DISTINCT p.*
            FROM posts p
            JOIN post_category pc ON pc.post_id = p.id
            WHERE pc.category_id IN (
                SELECT category_id
                FROM post_category
                WHERE post_id = :postId
            )
            AND p.id != :postId
            ORDER BY p.created_at DESC
            LIMIT :limit'
        );

        $stmt->bindValue('postId', $postId, PDO::PARAM_INT);
        $stmt->bindValue('limit', $limit, PDO::PARAM_INT);
        $stmt->execute();

        return $this->mapRowsToPosts($stmt->fetchAll());
    }


    public function findByCategoryPaginated(
        int $categoryId,
        int $limit,
        int $offset,
        string $sort
    ): array {
        $orderBy = match ($sort) {
            'views' => 'p.views DESC',
            default => 'p.created_at DESC',
        };

        $stmt = $this->db->prepare(
            "SELECT p.*
            FROM posts p
            JOIN post_category pc ON pc.post_id = p.id
            WHERE pc.category_id = :categoryId
            ORDER BY {$orderBy}
            LIMIT :limit OFFSET :offset"
        );

        $stmt->bindValue('categoryId', $categoryId, PDO::PARAM_INT);
        $stmt->bindValue('limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue('offset', $offset, PDO::PARAM_INT);
        $stmt->execute();

        return $this->mapRowsToPosts($stmt->fetchAll());
    }
    

    public function countByCategory(int $categoryId): int
    {
        $stmt = $this->db->prepare(
            'SELECT COUNT(*) FROM post_category WHERE category_id = :id'
        );

        $stmt->execute(['id' => $categoryId]);

        return (int) $stmt->fetchColumn();
    }


}
