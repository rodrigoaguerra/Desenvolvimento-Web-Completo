<?php
declare(strict_types=1);

namespace App\Domain\Produtos;

interface ProdutosRepository
{
    /**
     * @return Produtos[]
     */
    public function findAll(): array;

    /**
     * @param int $id
     * @return Produtos
     * @throws ProdutosNotFoundException
     */
    public function findUserOfId(int $id): Produtos;
}
