<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/artikel', 'Page::artikel');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');