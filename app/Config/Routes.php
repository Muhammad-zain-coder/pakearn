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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('payment-methods', 'Home::payment');
$routes->get('how-to-use', 'Home::howtouse');

$routes->add('/about', 'Home::about');

//Authentications (Login, Signup and forget password)

$routes->group('auth', function($routes){
    $routes->add('login', 'Auth\Auth::index');
    $routes->match(['get', 'post' ], 'register', 'Auth\Auth::register');
    $routes->match(['get', 'post' ], 'register/(:any)', 'Auth\Auth::register/$1');
    $routes->add('forget_password', 'Auth\Auth::forget');
    $routes->add('dashboard', 'Auth\Auth::dashboard',['filter' => 'auth']);
    $routes->add('auth', 'Auth\Auth::auth');
    $routes->add('logout', 'Auth\Auth::logout');
    $routes->add('widthrawal', 'Auth\Auth::widthrawal',['filter' => 'auth']);
    $routes->add('pay-credit', 'Auth\Auth::paymentDashboard',['filter' => 'auth']);
    $routes->add('paymentGateways', 'Auth\Auth::paymentGateways',['filter' => 'auth']);
});

$routes->group('admin', function($routes){
    $routes->match(['get', 'post' ], 'login', 'Admin::login');
    $routes->add('authenticate', 'Admin::authenticate');
    $routes->add('dashboard', 'Admin::dashboard');
    $routes->add('pendingClients', 'Admin::pendingClients');
    $routes->add('widthrawal', 'Admin::widthrawal');
    $routes->add('edit/(:num)', 'Admin::edit/$1');
    $routes->add('widthrawalEdit/(:num)', 'Admin::widthrawalEdit/$1');
    $routes->add('update', 'Admin::update');
    $routes->add('signout', 'Admin::logout');
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
