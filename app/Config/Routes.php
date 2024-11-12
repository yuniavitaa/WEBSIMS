<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('login', 'User::login');
$routes->get('register', 'User::register');
$routes->get('/', 'Home::index');
$routes->post('user/regis', 'User::regis');
$routes->post('user/loginProcess', 'User::loginProcess');
$routes->get('user/logout', 'User::logout');
$routes->get('/service', 'Service::service');
$routes->get('/pay_tv_services', 'Service::pay_tv_services');
$routes->get('/high_speed_internet_access', 'Service::high_speed_internet_access');
$routes->get('/vpn_services', 'Service::vpn_services');
$routes->get('/bts_hotel', 'Service::bts_hotel');
$routes->get('/dark_viber_connection', 'Service::dark_viber_connection');
$routes->get('/data_center', 'Service::data_center');
$routes->get('/vsat', 'Service::vsat');
$routes->get('/training', 'Service::training');
$routes->get('/experience', 'Experience::experience');
$routes->get('/about_us', 'AboutUs::about_us');
$routes->get('/blog', 'Blog::blog');
$routes->get('/blog_item', 'Blog::blog_item');
$routes->get('/contact_us', 'ContactUs::contact_us');
$routes->get('/payment', 'Payment::index');
$routes->post('/payment/Kabupaten', 'Payment::Kabupaten');
$routes->post('/payment/Kecamatan', 'Payment::Kecamatan');
$routes->post('/payment/simpan', 'Payment::simpan');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/vpn_services/form', 'Service::vpn_form'); // Tambahkan rute ini

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
