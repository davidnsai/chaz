<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/whatsapp-community', 'Home::whatsappCommunity');
// $routes->get('/contact-us', 'Home::contactUs');
$routes->get('/download-application', 'Home::downloadApplicationForm');
