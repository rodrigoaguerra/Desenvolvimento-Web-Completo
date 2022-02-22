<?php
declare(strict_types=1);

namespace App\Application\Actions\Produtos;

use Psr\Http\Message\ResponseInterface as Response;
use Models\Produto;

class ListProdutosAction extends ProdutosAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $produtos = Produto::get();

        return $this->respondWithData($produtos);
    }
}
