<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'CpController::index');
$routes->get('error-page', 'CpController::error');
