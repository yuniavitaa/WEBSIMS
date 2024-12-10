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
// Default route
$routes->get('/', 'Home::index');

// User Authentication Routes
$routes->get('login', 'User::login');
$routes->get('register', 'User::register');
$routes->get('user', 'User::index');
$routes->post('user/regis', 'User::regis');
$routes->post('user/loginProcess', 'User::loginProcess');
$routes->get('/logout', 'User::logout');

$routes->get('/admin/user', 'User::listUsers');
$routes->get('/admin/user/create', 'User::createUser'); // Form create
$routes->post('/admin/user/create', 'User::createUser'); // Proses create
$routes->get('/admin/user/edit/(:num)', 'User::editUser'); // Form edit
$routes->post('/admin/user/edit/(:num)', 'User::editUser'); // Proses edit
$routes->get('/admin/user/delete/(:num)', 'User::deleteUser'); // Proses delete




// Service Routes
$routes->get('service', 'Service::service');
$routes->get('pay_tv_services', 'Service::pay_tv_services');
$routes->get('high_speed_internet_access', 'Service::high_speed_internet_access');
$routes->get('vpn_services', 'Service::vpn_services');
$routes->get('vpn_services/form', 'Service::vpn_form'); // Form VPN
$routes->get('bts_hotel', 'Service::bts_hotel');
$routes->get('dark_viber_connection', 'Service::dark_viber_connection');
$routes->get('data_center', 'Service::data_center');
$routes->get('vsat', 'Service::vsat');
$routes->get('training', 'Service::training');

// Payment Routes
$routes->get('payment', 'Payment::index');
$routes->post('payment/Kabupaten', 'Payment::Kabupaten');
$routes->post('payment/Kecamatan', 'Payment::Kecamatan');
$routes->post('payment/simpan', 'Payment::simpan');

// Blog Routes
$routes->get('blog', 'Blog::blog');
$routes->get('blog_item', 'Blog::blog_item');

// Experience and About Us Routes
$routes->get('experience', 'Experience::experience');
$routes->get('about_us', 'AboutUs::about_us');

// Contact Us Routes
$routes->get('contact_us', 'ContactUs::contact_us');
$routes->post('contact_us/save', 'ContactUs::saveMessage');
$routes->get('admin/contact-us', 'ContactUs::index');

// form pendaftaran dan upload bukti
$routes->get('/pendaftaran', 'PendaftaranAnggota::index');
$routes->post('/pendaftaran/kirim', 'PendaftaranAnggota::kirim');
$routes->get('pendaftaran/uploadBukti', 'PendaftaranAnggota::uploadBukti');
$routes->post('pendaftaran/prosesUploadBukti', 'PendaftaranAnggota::prosesUploadBukti');
$routes->post('proses-upload-bukti', 'PendaftaranAnggota::prosesUploadBukti');


// Dashboard Route
$routes->get('dashboard', 'Dashboard::index');
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
