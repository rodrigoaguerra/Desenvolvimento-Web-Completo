<?php
declare(strict_types=1);

namespace App\Application\Actions\Produtos;

use Psr\Http\Message\ResponseInterface as Response;
use Models\Produto;

class DeleteProdutosAction extends ProdutosAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $produtoId = (int) $this->resolveArg('id');
        $produto = Produto::findOrFail($produtoId);
        $produto->delete();
        return $this->respondWithData($produto);
    }
}
