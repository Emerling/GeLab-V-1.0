<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
  require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Auth');
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
$routes->get('/', 'Auth::index');
$routes->get('/', 'Crud::index');
$routes->get('/crud/obtenerNombre/(:any)', 'Crud::obtenerNombre/$1');
$routes->get('/crud/eliminar/(:any)', 'Crud::eliminar/$1');
$routes->put('/crud/crear', 'Crud::crear');
$routes->put('/crud/actualizar', 'Crud::actualizar');
// CRUD RESTful Routes
$routes->get('users-list', 'UserCrud::index');
$routes->get('user-form', 'UserCrud::create');
$routes->post('submit-form', 'UserCrud::store');
$routes->get('edit-view/(:num)', 'UserCrud::singleUser/$1');
$routes->post('update', 'UserCrud::update');
$routes->get('delete/(:num)', 'UserCrud::delete/$1');

$routes->group('', ['filter' => 'AuthCheckFilter'], function ($routes) {
  // // // todas las rutas que se van aproteger 
  $routes->get('/dashboard', 'Dashboard::index');
  $routes->get('/dashboard/profile', 'Dashboard::profile');
  $routes->get('/crud', 'Crud::index');

});
$routes->group(' ', ['filter' => 'AlreadyLoggedFilter'], function ($routes) {
   $routes->get('/auth', 'Auth::index');
  $routes->get('/auth/register', 'Auth::register');
});

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
