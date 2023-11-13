<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/getData', 'MainController::getData');
$routes->get('/ListAll', 'Listing::ListAll');
$routes->get('/Ratings', 'Listing::Ratings');
$routes->match(['get', 'post'],'/Register', 'Account::Register_Tourist');
$routes->post('/save', 'MainController::save');
$routes->post('/del', 'MainController::del');