<?php

use App\Controllers\UserController;

    // Rotas para o gerenciamento de usuários
    $router->get('usuarios', 'UserController@index');
    $router->post('usuarios/create', 'UserController@create');
    $router->post('usuarios/update', 'UserController@update');
    $router->post('usuarios/delete', 'UserController@delete');

?>