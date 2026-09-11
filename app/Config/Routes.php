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
