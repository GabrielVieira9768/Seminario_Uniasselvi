<?php

    use App\Controllers\UserController;
    use App\Controllers\PostController;
    use App\Controllers\AuthController;

    session_start();

    // Rotas para o gerenciamento de usuários
    $router->get('usuarios', 'UserController@index');
    $router->get('usuarios/busca', 'UserController@search');
    $router->post('usuarios/create', 'UserController@create');
    $router->post('usuarios/update', 'UserController@update');
    $router->post('usuarios/delete', 'UserController@delete');

    // Rotas para o gerenciamento de posts
    $router->get('posts', 'PostController@index');
    $router->get('posts/busca', 'PostController@search');
    $router->post('posts/create', 'PostController@create');
    $router->post('posts/update', 'PostController@update');
    $router->post('posts/delete', 'PostController@delete');

    // Rotas de acesso livre
    $router->get('', 'PostController@indexPosts');

    // Rota para logout
    $router->get('login', 'AuthController@index');
    $router->post('login', 'AuthController@login');
    $router->get('logout', 'AuthController@logout');

?>