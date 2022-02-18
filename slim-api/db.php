<?php
if(PHP_SAPI !== 'cli') {
  exit('Rodar via CLI');
}

use DI\ContainerBuilder;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';


// Instantiate PHP-DI ContainerBuilder
$containerBuilder = new ContainerBuilder();

// Set up settings
$settings = require __DIR__ . '/app/settings.php';
$settings($containerBuilder);

$dependencies = require __DIR__ . '/app/dependencies.php';
$dependencies($containerBuilder);

// Build PHP-DI Container instance
$container = $containerBuilder->build();

// Instantiate the app
AppFactory::setContainer($container);
$app = AppFactory::create();

$callableResolver = $app->getCallableResolver();


$db = $container->get('db');

$schema = $db->schema();
$table =  'produtos';

$schema->dropIfExists($table);

$schema->create($table, function($tb) {
  $tb->increments('id');
  $tb->string('titulo', 100);
  $tb->text('descricao');
  $tb->decimal('preco', 11, 2);
  $tb->string('fabricante', 60);
  $tb->date('dt_criacao');
});

$db->table($table)->insert([
  'titulo' => 'Smartphone Samsung Galazy 8790',
  'descricao' => 'Super top o melhor do melhor do mundo',
  'preco' => 8811.00,
  'fabricante' => 'Chain na tal',
  'dt_criacao' => '2019-02-07',
]);

$db->table($table)->insert([
  'titulo' => 'Smartphone2 Samsung Galazy 8790',
  'descricao' => 'Super2 top o melhor do melhor do mundo',
  'preco' => 8812.00,
  'fabricante' => 'Chain na tal',
  'dt_criacao' => '2019-02-07',
]);
