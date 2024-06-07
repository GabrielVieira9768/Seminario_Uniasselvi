<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController
{

    public function index()
    {
        $page = 1;

        if(isset($_GET['pagina']) && !empty($_GET['pagina'])){
            $page = intval($_GET['pagina']);

            if($page <= 0){
                return redirect('usuarios');
            }
        }

        $itensPage = 2;
        $start = $itensPage * $page - $itensPage;
        $rows_count = App::get('database')->countAll('users');

        if($start > $rows_count)
        {
            return redirect('usuarios');
        }

        $users = App::get('database')->selectAll('users', $start, $itensPage);
        $total_pages = ceil($rows_count/$itensPage);

        return view('admin/gerenciamento-usuarios', compact('users','page','total_pages'));
    }
}

?>