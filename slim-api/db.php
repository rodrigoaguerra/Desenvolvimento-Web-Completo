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

$table =  'usuarios';

$schema->dropIfExists($table);

$schema->create($table, function($tb) {
  $tb->increments('id');
  $tb->string('nome', 100);
  $tb->string('email', 150);
  $tb->string('senha', 32);
  $tb->timestamps();
});

$db->table($table)->insert([
  'nome' => 'Rodrigo Alves Guerra',
  'email' => 'rodrigoa.guerra@hotmail.com',
  'senha' =>  md5('12345678'),
]);

$table =  'produtos';

$schema->dropIfExists($table);

$schema->create($table, function($tb) {
  $tb->increments('id');
  $tb->string('titulo', 100);
  $tb->text('descricao');
  $tb->decimal('preco', 11, 2);
  $tb->string('fabricante', 60);
  $tb->timestamps();
});

$db->table($table)->insert([
  'titulo' => 'Smartphone Samsung Galazy 8790',
  'descricao' => 'Super top o melhor do melhor do mundo',
  'preco' => 8811.00,
  'fabricante' => 'Chain na tal',
  'created_at' => '2020-10-22',
  'updated_at' => '2020-10-22',
]);

$db->table($table)->insert([
  'titulo' => 'Smartphone2 Samsung Galazy 8790',
  'descricao' => 'Super2 top o melhor do melhor do mundo',
  'preco' => 8812.00,
  'fabricante' => 'Chain na tal',
  'created_at' => '2020-10-01',
  'updated_at' => '2020-10-01',
]);
