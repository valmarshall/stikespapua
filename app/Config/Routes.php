<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/admin/dashboard', 'AdminDashboard::index');
$routes->get('/admin/user', 'AdminUsers::index');
$routes->get('/admin/user/add', 'AdminUsers::add');
$routes->get('/admin/user/edit/(:segment)', 'AdminUsers::edit/$1');
$routes->get('/admin/role', 'AdminRoles::index');
$routes->get('/admin/role/add', 'AdminRoles::add');
$routes->get('/admin/role/edit/(:segment)', 'AdminRoles::edit/$1');
$routes->get('/admin/menu', 'AdminMenus::index');
$routes->get('/admin/menu/add', 'AdminMenus::add');
$routes->get('/admin/menu/edit/(:segment)', 'AdminMenus::edit/$1');
$routes->delete('/admin/role/(:num)', 'AdminRoles::delete/$1');
$routes->delete('/admin/user/(:num)', 'AdminUsers::delete/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
