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

    public function create()
    {
        $arquivo = $_FILES['image']['name'];
        $novoNome = uniqid();
        $pasta = 'public/img/';
        $extencao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
        $deuCerto = move_uploaded_file($_FILES['image']['tmp_name'], $pasta . $novoNome . "." . $extencao);

        $parameters = [
            'title' => $_POST['title'],
            'image' => $pasta . $novoNome . "." . $extencao,
            'content' => $_POST['content'],
            'author' => $_POST['author'],
            'date' => $_POST['date'],
        ];

        App::get('database')->insert('posts',$parameters);
        header('location: /posts');
    }
}

?>