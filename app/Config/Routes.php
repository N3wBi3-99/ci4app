<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->SetAutoRoute(true);

$routes->get('/', 'Home::index');
