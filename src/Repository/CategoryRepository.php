<?php
declare(strict_types=1);

namespace App\Repository;

use App\Entity\Category;
use App\Infrastructure\Database;
use PDO;

final class CategoryRepository
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function findAll(): array
    {
        $stmt = $this->db->query('SELECT * FROM categories');

        return array_map(
            fn($row) => new Category(
                $row['id'],
                $row['name'],
                $row['description']
            ),
            $stmt->fetchAll()
        );
    }

    public function findById(int $id): ?Category
    {
        $stmt = $this->db->prepare(
            'SELECT * FROM categories WHERE id = :id'
        );

        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch();

        if (!$row) {
            return null;
        }

        return new Category(
            $row['id'],
            $row['name'],
            $row['description']
        );
    }

    public function findWithPosts(): array
    {
        $stmt = $this->db->query(
            'SELECT DISTINCT c.*
            FROM categories c
            JOIN post_category pc ON pc.category_id = c.id'
        );

        return array_map(
            fn($row) => new Category(
                $row['id'],
                $row['name'],
                $row['description']
            ),
            $stmt->fetchAll()
        );
    }
}
