<?php
declare(strict_types=1);

namespace App\Entity;

final class Post
{
    public function __construct(
        public int $id,
        public string $title,
        public string $description,
        public string $text,
        public ?string $image,
        public int $views,
        public string $createdAt
    ) {}
}
