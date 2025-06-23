<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Auth::index');
$routes->get('/login', 'Auth::index');
$routes->post('/login', 'Auth::loginUser');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::registerUser');
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'authGuard']);
$routes->get('/history', 'Dashboard::history', ['filter' => 'authGuard']);
$routes->get('job-entry', 'JobEntry::create', ['filter' => 'authGuard']);
$routes->post('job-entry/store', 'JobEntry::store', ['filter' => 'authGuard']);
$routes->get('job-entry/print/(:num)', 'JobEntry::print/$1', ['filter' => 'authGuard']);
$routes->get('job-entry/history', 'JobEntry::history', ['filter' => 'authGuard']);
$routes->get('job-entry/edit/(:num)', 'JobEntry::edit/$1', ['filter' => 'authGuard']);
$routes->put('job-entry/update/(:num)', 'JobEntry::update/$1', ['filter' => 'authGuard']);
$routes->get('job-entry/delete/(:num)', 'JobEntry::delete/$1', ['filter' => 'authGuard']);

$routes->get('/logout', 'Auth::logout');
