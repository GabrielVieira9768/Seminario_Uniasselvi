<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostController
{
    public function index()
    {
        $page = 1;

        if(isset($_GET['pagina']) && !empty($_GET['pagina'])){
            $page = intval($_GET['pagina']);

            if($page <= 0){
                return redirect('posts');
            }
        }

        $itensPage = 2;
        $start = $itensPage * $page - $itensPage;
        $rows_count = App::get('database')->countAll('posts');

        if($start > $rows_count)
        {
            return redirect('posts');
        }

        $posts = App::get('database')->selectAll('posts', $start, $itensPage);
        $total_pages = ceil($rows_count/$itensPage);
        $pagination = true;

        return view('admin/gerenciamento-posts', compact('posts','page','total_pages', 'pagination'));
    }
}

?>