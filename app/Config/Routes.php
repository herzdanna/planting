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
$routes->setDefaultController('Page');
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
$routes->get('{locale}/', 'Page::index');
//$routes->get('/', 'Page::index');
$routes->add('{locale}/about-us','Page::about');
$routes->add('{locale}/work','Page::work');
$routes->add('{locale}/work/(:alpha)','Page::work/$1');
$routes->add('{locale}/join-us','Page::join');
$routes->add('{locale}/stories','Page::stories');
$routes->add('{locale}/blog','Page::blog');
$routes->add('{locale}/donate','Page::donate');
$routes->add('{locale}/resources','Page::resources');
$routes->add('{locale}/our-offices','Page::legal');
$routes->add('{locale}/donate-usa','Page::donateUsa');
$routes->add('{locale}/donate-Canada','Page::donateCanada');

// routes admin

$routes->add('admin','Page::login');
$routes->add('panel','Page::panel');



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
