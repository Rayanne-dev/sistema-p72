<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/home', 'ConteudoController::index');
$routes->get('/Contato', 'ConteudoController::Contato');
$routes->get('/QuemSou', 'ConteudoController::QuemSou');
$routes->get('/PlanosFuturos', 'ConteudoController::PlanosFuturos');
$routes->get('/Habilidades', 'ConteudoController::Habilidades');
$routes->get('/FaleComigo', 'ConteudoController::FaleComigo');


//Listagem, formulário de edição e atualização
$routes->get('conteudos', 'ConteudoController::listar');
$routes->get('conteudos/editar/(:num)', 'ConteudoController::editar/$1');
$routes->post('conteudos/atualizar/(:num)', 'ConteudoController::atualizar/$1');
