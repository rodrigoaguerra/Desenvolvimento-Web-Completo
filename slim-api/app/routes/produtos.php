<?php
declare(strict_types=1);

use App\Application\Actions\Produtos\ViewProdutosAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

$app->group('/api/v1', function (Group $group) {
    $group->get('/produtos', ViewProdutosAction::class);
});
