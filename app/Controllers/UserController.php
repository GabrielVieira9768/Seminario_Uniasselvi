<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController
{

    public function index()
    {
        $users = App::get('database')->selectAll('users');
        return view('site/index', compact('users'));
    }
}

?>