<?php

use Illuminate\Routing\Router;

/** @var $router Router */
$router->group(['prefix' => '/product'], function (Router $router) {
    $router->get('/get-all', [
        'uses' => 'ApiProductController@get_all',
        'as' => 'api.product.getall',
    ]);

});
