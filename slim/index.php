<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Illuminate\Database\Capsule\Manager as Capsule;

require 'vendor/autoload.php';

$app = new \Slim\App([
  'settings' => [
    'displayErrorDetails' => true
  ]
]);

$container = $app->getContainer();
$container['db'] = function () {

  $capsule = new Capsule;

  $capsule->addConnection([
      'driver' => 'mysql',
      'host' => 'localhost',
      'database' => 'slim',
      'username' => 'root',
      'password' => '',
      'charset' => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix' => '',
  ]);

  // Make this Capsule instance available globally via static methods... (optional)
  $capsule->setAsGlobal();

  // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
  $capsule->bootEloquent();

  return $capsule;
};


$app->get('/usuarios', function(Request $request, Response $response) {
  $db = $this->get('db');
  // $db->schema()->dropIfExists('usuarios');
  // $db->schema()->create('usuarios', function($table){

  //   $table->increments('id');
  //   $table->string('nome');
  //   $table->string('email');
  //   $table->timestamps();

  // });

  /* Inserir */
  // $db->table('usuarios')->insert([
  //   'nome' => 'Rodrigo Alves Guerra',
  //   'email' => 'rodrigoa.guerra@hotmail.com'
  // ]);

  // /* Atualizar */
  // $db->table('usuarios')
  //     ->where('id', 1)
  //     ->update([
  //       'nome' => 'Rodrigo',
  //     ]);

  /* Delete */
  // $db->table('usuarios')
  //     ->where('id', 1)
  //     ->delete();

  /* Listar */
  $usuarios = $db->table('usuarios')->get();
  foreach ($usuarios as $usuario) {
    echo $usuario->nome . '<br>';
  }
});

/* Tipos de resposta
  cabeçalho, texto, JSON, XML
*/

// $app->get('/header', function(Request $request, Response $response) {
//   $response->write('Esse é um retorno header');
//   return $response->withHeader('allow', 'PUT')
//            ->withAddedHeader('Content-Length', 10);
// });

// $app->get('/json', function(Request $request, Response $response) {
//   return $response->withJson([
//     'nome' => 'Rodrigo Alves Guerra',
//     'endereco' => 'Endereco tal...'
//   ]);
// });

// $app->get('/xml', function(Request $request, Response $response) {
//   $xml = file_get_contents('arquivo');
//   $response->write($xml);
//   return $response->withHeader('Content-Type', 'application/xml');
// });

// /* Middleware */
// $app->add( function(Request $request, Response $response, $next){

//   $response->write(' Inicio camada 1 + ');
//   $response = $next($request, $response);
//   // return $next($request, $response);
//   $response->write('+ Fim camada 1');
//   return $response;
// });

// $app->add( function(Request $request, Response $response, $next){

//   $response->write(' Inicio camada 2 + ');
//   $response = $next($request, $response);
//   // return $next($request, $response);
//   $response->write('+ Fim camada 2');
//   return $response;
// });

// $app->add( function(Request $request, Response $response, $next){

//   $response->write(' Inicio camada 2 + ');
//   return $next($request, $response);

// });

// $app->get('/usuarios', function(Request $request, Response $response) {

//   $response->write(' Ação principal usuarios ');

// });



// $app->get('/postagens', function(Request $request, Response $response) {

//   $response->write(' Ação principal postagens ');

// });

$app->run();


// class Servico {

// }

// $servicos = new Servico;

// // container dependency injection
// $container = $app->getContainer();
// $container['Home'] = function () {
//   return new MyApp\controllers\Home( new MyApp\View );
// };

// $app->get('/servicos', function(Request $request, Response $response) {
//   $servico = $this->get('servico');
//   var_dump($servico);
// });

// $app->get('/usuario', 'Home:index');

// /** Padrão PSR7 */
// $app->get('/postagens', function(Request $request, Response $response) {

//   /** Escreve no corpo da resposta utilizando o padrão PSR7 */
//   $response->getBody()->write('Listagem de postagens');
//   return $response;
// });

// $app->post('/usuarios/adiciona', function(Request $request, Response $response) {
//   // Recupera post ($_POST)
//   $post = $request->getParsedBody();
//   $nome = $post['nome'];
//   $email = $post['email'];
//   return  $response->getBody()->write($nome . ' - ' . $email);
// });


// $app->put('/usuarios/atualiza', function(Request $request, Response $response) {
//   // Recupera post ($_POST)
//   $post = $request->getParsedBody();
//   $id = $post['id'];
//   $nome = $post['nome'];
//   $email = $post['email'];
//   return  $response->getBody()->write('Sucesso ao atualizar :'. $id);
// });

// $app->delete('/usuarios/remove/{id}', function(Request $request, Response $response) {
//   $id = $request->getAttribute('id');

//   return  $response->getBody()->write('Sucesso ao deletar :'. $id);
// });


// $app->get('/postagens2', function() {
//   echo 'Listagem de postagens';
// });

// $app->get('/usuarios[/{id}]', function(Request $request, Response $response) {
//   $id = $request->getAttribute('id');

//   //Verficar se ID é valido e existe no BD

//   echo 'Listagem de usuarios ou ID: ' . $id;
// });

// $app->get('/postagens[/{ano}[/{mes}]]', function(Request $request, Response $response) {
//   $ano = $request->getAttribute('ano');
//   $mes = $request->getAttribute('mes');

//   //Verficar se ID é valido e existe no BD

//   echo 'Listagem de postagens Ano: '. $ano . 'Mes: ' . $mes;
// });


// $app->get('/lista/{itens:.*}', function(Request $request, Response $response) {
//   $itens = $request->getAttribute('itens');

//   //Verficar se ID é valido e existe no BD

//   var_dump(explode("/", $itens));
// });

// $app->get('/blog/postagens/{id}', function(Request $request, Response $response) {
//   echo "listar postagem para um ID.";
// })->setName("blog");

// $app->get('/meusite', function(Request $request, Response $response) {
//     $retorno = $this->get("router")->pathFor("blog", ['id' => '5']);
//     echo $retorno;
// });

// $app->group('/v5', function() {
//     $this->get('/postagens', function() {
//      echo 'Listagem de postagens';
//     });

//     $this->get('/usuarios', function() {
//         echo 'Listagem de usuarios';
//     });

// });

?>
