<?php

// // Require composer autoloader
// require __DIR__ . '/vendor/autoload.php';

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
$router->get('/', '\App\Controllers\PageController@index');
$router->post('/', '\App\Controllers\PageController@store');
$router->get('/thank-you', '\App\Controllers\PageController@thankyou');
$router->get('/about', function() {
  echo 'About Page Contents';
});
$router->set404(function() {
  header('HTTP/1.1 404 Not Found');
 echo "<h1>Page not Found</h1>";
});

