<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Routes for Index controller
$routes->get('/', 'Index::index');

// Routes for Users controller
$routes->get('users', 'Users::index');

// Routes for Products controller
$routes->get('products', 'Products::index');
$routes->get('products/add', 'Products::add');
$routes->get('products/edit', 'Products::edit');
$routes->get('products/view/(:num)', 'Products::view/$1');
$routes->post('products/insert', 'Products::insert');
$routes->get('products/delete/(:num)', 'Products::delete/$1');