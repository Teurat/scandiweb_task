<?php
namespace Teurat\Scandiweb\Infrastructure\Repository;

use PDO;

final class CurrencyRepository
{
    public function __construct(private PDO $pdo) {}

    /** @return array<array{code:string,symbol:string}> */
    public function getAll(): array
        {
            return $this->pdo->query('SELECT code, symbol FROM currency')
                            ->fetchAll(PDO::FETCH_ASSOC);
        }

}
