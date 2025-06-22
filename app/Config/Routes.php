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
$routes->get('job-entry', 'JobEntry::create');
$routes->post('job-entry/store', 'JobEntry::store');
$routes->get('job-entry/print/(:num)', 'JobEntry::print/$1');
$routes->get('job-entry/history', 'JobEntry::history');                 // List page
$routes->get('job-entry/edit/(:num)', 'JobEntry::edit/$1');            // Edit form
$routes->post('job-entry/update/(:num)', 'JobEntry::update/$1');       // Save update
$routes->get('job-entry/delete/(:num)', 'JobEntry::delete/$1');        // Delete

$routes->get('/logout', 'Auth::logout');

