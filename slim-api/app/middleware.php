<?php
declare(strict_types=1);
use App\Application\Settings\SettingsInterface;
use App\Application\Middleware\SessionMiddleware;
use Slim\App;

return function (App $app) {
    $app->add(SessionMiddleware::class);
    $container = $app->getContainer();
    $app->add(new Tuupola\Middleware\JwtAuthentication([
        "header" => "Authorization",
        "regexp" => "/(.*)/",
        "path" => ["/api"],
        "ignore" => ["/api/token"],
        "algorithm" => ["HS256"],
        "secret" => $container->get(SettingsInterface::class)->get('secretKey'),
    ]));
    
    $app->add(function ($request, $handler) {
        $response = $handler->handle($request);
        return $response
                ->withHeader('Access-Control-Allow-Origin', '*')
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
    });
};
