<?php
declare(strict_types=1);

namespace App\Application\Actions\Produtos;

use Psr\Http\Message\ResponseInterface as Response;
use Models\Produto;

class AddProdutosAction extends ProdutosAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $dados = $this->request->getParsedBody();

        // Validar
        $produto = Produto::create($dados);
        return $this->respondWithData($produto);
    }
}
