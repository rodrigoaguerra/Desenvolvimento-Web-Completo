<?php
declare(strict_types=1);

use App\Application\Actions\Produtos\ViewProdutosAction;
use App\Application\Actions\Produtos\ListProdutosAction;
use App\Application\Actions\Produtos\AddProdutosAction;
use App\Application\Actions\Produtos\UpdateProdutosAction;
use App\Application\Actions\Produtos\DeleteProdutosAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

$app->group('/api/v1', function (Group $group) {
    $group->get('/produtos/lista', ListProdutosAction::class);
    $group->get('/produtos/lista/{id}', ViewProdutosAction::class);
    $group->post('/produtos/adiciona', AddProdutosAction::class);
    $group->put('/produtos/atualiza/{id}', UpdateProdutosAction::class);
    $group->delete('/produtos/remove/{id}', DeleteProdutosAction::class);
});
