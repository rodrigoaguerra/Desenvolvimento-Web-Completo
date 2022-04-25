<?php
declare(strict_types=1);
use App\Application\Settings\SettingsInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Firebase\JWT\JWT;
use Models\Usuario;

// rotas para geração de token
$app->post('/api/token', function (Request $request, Response $response) {
    $dados =  $request->getParsedBody();
    
    $email = $dados['email'] ?? null;
    $senha = $dados['senha'] ?? null;

    $usuario = Usuario::where('email', $email)->first();

    if(!is_null($usuario) && (md5($senha) === $usuario->senha)) {
        
        // gerar token
        $secretKey = $this->get(SettingsInterface::class)->get('secretKey');

        $chave = JWT::encode($usuario->toArray(), $secretKey, 'HS256');
       
    }

    $json = json_encode(['chave' => $chave], JSON_PRETTY_PRINT);
    $response->getBody()->write($json);
    
    return $response;
});
