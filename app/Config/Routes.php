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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/testcurl', 'Home::testcurl');
$routes->get('/testgs', 'Home::testgs');
$routes->get('/testgs2', 'Home::testgsstatistik');
$routes->get('/testscrape', 'Home::testcitationdosen');
$routes->get('/testgs3', 'GoogleScholar::getNbCitationDosen');
$routes->get('/testsitasi', 'Home::testcitationdosen');
$routes->get('/testExcel', 'Home::testReadExcel');

//routes delete
$routes->delete('/mitradata/(:num)', 'Mitra::delete/$1');
$routes->delete('/rekognisidosendata/(:num)', 'RekognisiDosen::delete/$1');

//routes form edit
$routes->get('/mitradata/edit/(:segment)','Mitra::edit/$1');
$routes->post('/mitra/edit/(:segment)', 'Mitra::update/$1');
$routes->get('/rekognisidosen/edit/(:segment)', 'RekognisiDosen::edit/$1');
$routes->post('/rekognisidosen/edit/(:segment)', 'RekognisiDosen::update/$1');

//routesmitra
$routes->get('/', 'Home::index');
$routes->get('/mitra', 'Mitra::index', ['filter' => 'auth']);

$routes->get('/akun', 'UserAccountController::index');
$routes->post('/akun/create', 'UserAccountController::createAccount');

$routes->get('/mitradata', 'Mitra::datakerjasama', ['filter' => 'auth']);
$routes->post('/mitra/save', 'Mitra::save');
$routes->post('/googlescholar/save', 'GoogleScholar::save');
$routes->post('/rekognisidosen/save', 'RekognisiDosen::save');
$routes->get('/rekognisidosen', 'RekognisiDosen::index', ['filter' => 'auth']);
$routes->get('/rekognisidosendata', 'RekognisiDosen::dataRekognisiDosen', ['filter' => 'auth']);
$routes->post('/mitra/savelembaga', 'Mitra::saveLembaga');
$routes->get('/login', 'LoginController::index');
$routes->post('/login', 'LoginController::login');
$routes->get('/dashboard', 'Home::index', ['filter' => 'auth']);
$routes->get('/logout', 'LoginController::logout');

//test routes
$routes->get('/inputidscholar', 'GoogleScholar::inputIdScholar');
$routes->get('/scholar', 'GoogleScholar::dataScholar');
$routes->get('/test', 'Home::test');
$routes->get('/mitra/test', 'Mitra::test');
$routes->get('/mitra/readtest', 'Mitra::readtest');
$routes->get('/mitra/info', 'Mitra::info');
$routes->get('/rekognisidosen/test', 'RekognisiDosen::test');

/**
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
