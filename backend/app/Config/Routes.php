<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/getData', 'MainController::getData');
$routes->post('/save', 'MainController::save');
$routes->post('/del', 'MainController::del');

//User Side
$routes->match(['get', 'post'],'/Register', 'Authentication::Register');
$routes->match(['get', 'post'],'/Login', 'Authentication::Login');
$routes->match(['get', 'post'],'/Logout', 'Authentication::Logout');
$routes->match(['get', 'post'],'/Account_Info', 'Authentication::Account_Info');
$routes->match(['get', 'post'],'/Account_Info_Edit', 'Authentication::Account_Info_Save');
$routes->match(['get', 'post'],'/Booking_Info_Past', 'Authentication::Past_Booking');

//Hotel Side
$routes->get('/ListAll', 'Listing::ListAll');
$routes->get('/Ratings', 'Listing::Ratings');
$routes->match(['get', 'post'],'/Hotel_Verify', 'HotelsResortsAccount::Hotel_Verify');
$routes->match(['get', 'post'],'/Room', 'HotelsResortsAccount::room');
$routes->match(['get', 'post'],'/Room_Edit', 'HotelsResortsAccount::room_edit');

//Verify 
$routes->match(['get', 'post'],'/Verify', 'Verify::verify');
$routes->match(['get', 'post'],'/Resend', 'Verify::resend');
$routes->match(['get', 'post'],'/Sending', 'Verify::sending');

//Forgot Password
$routes->match(['get', 'post'],'/Forgot', 'Verify::forgot');
$routes->match(['get', 'post'],'/Resending', 'Verify::resending');
$routes->match(['get', 'post'],'/Verifying', 'Verify::verifying');
$routes->match(['get', 'post'],'/Recover', 'Verify::recover');

//Mailing
$routes->match(['get', 'post'],'/Query', 'Mailing::query');
$routes->match(['get', 'post'],'/Newsletter', 'Mailing::newsletter');


$routes->get('/akin','Authentication::UserData');
$routes->get('/test/(:any)','Authentication::Select/$1');