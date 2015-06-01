<?php
use Cake\Routing\Router;

Router::plugin('AdminLTE', function ($routes) {
    $routes->fallbacks('InflectedRoute');
});
