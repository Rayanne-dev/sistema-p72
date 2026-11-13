<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
service('auth')->routes($routes);

$routes->get('/', 'Home::index');
$routes->get('/home', 'ConteudoController::index');
$routes->get('/Contato', 'ConteudoController::Contato');
$routes->get('/QuemSou', 'ConteudoController::QuemSou');
$routes->get('/PlanosFuturos', 'ConteudoController::PlanosFuturos');
$routes->get('/Habilidades', 'ConteudoController::Habilidades');
$routes->get('/FaleComigo', 'ConteudoController::FaleComigo');


// Rotas que exigem autenticação por sessão
$routes->group('', ['filter' => 'session'], static function ($routes) {
    $routes->get('conteudos', 'ConteudoController::listar');
    $routes->get('conteudos/editar/(:num)', 'ConteudoController::editar/$1');
    $routes->post('conteudos/atualizar/(:num)', 'ConteudoController::atualizar/$1');
    });

// Exemplo de rota exclusiva para administradores
$routes->get('admin', 'Admin\Painel::index', [
    'filter' => ['session', 'group:admin'],
    ]);

    // Logout: aceita apenas usuários autenticados
$routes->post('admin/sair', 'Admin\Painel::logout', [
 'filter' => 'session',
]);
