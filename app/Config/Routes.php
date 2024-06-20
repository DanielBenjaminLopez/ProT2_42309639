<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('vista', 'Controlador::función');
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');
