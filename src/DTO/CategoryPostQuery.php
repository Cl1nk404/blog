<?php
declare(strict_types=1);

namespace App\DTO;

final class CategoryPostQuery
{
    public function __construct(
        public int $page = 1,
        public int $limit = 5,
        public string $sort = 'date' // date | views
    ) {}
}
