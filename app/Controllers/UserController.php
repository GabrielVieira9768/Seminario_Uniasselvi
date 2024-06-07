<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController
{

    public function index()
    {
        $users = App::get('database')->selectAll('users');
        return view('admin/gerenciamento-usuarios', compact('users'));
    }
}

?>