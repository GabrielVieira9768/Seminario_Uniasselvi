<?php

use App\Controllers\UserController;

    $router->get('usuarios', 'UserController@index');
    $router->post('usuarios/create', 'UserController@create');

?>