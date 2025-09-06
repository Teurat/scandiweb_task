<?php
namespace Teurat\Scandiweb\Infrastructure\Repository;

use PDO;
use Teurat\Scandiweb\Domain\Category\Category;

final class CategoryRepository
{
    public function __construct(private PDO $pdo) {}

    /** @return Category[] */
    public function getAll(): array
{
    $rows = $this->pdo->query('SELECT name FROM category')->fetchAll(PDO::FETCH_COLUMN);
    return array_map(fn($name) => new Category($name), $rows);
}

}
