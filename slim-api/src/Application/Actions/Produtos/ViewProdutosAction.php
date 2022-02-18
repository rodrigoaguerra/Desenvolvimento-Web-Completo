<?php
declare(strict_types=1);

namespace App\Application\Actions\Produtos;

use Psr\Http\Message\ResponseInterface as Response;

class ViewProdutosAction extends ProdutosAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        return $this->respondWithData(['Nome' =>  'Teste send']);
    }
}
