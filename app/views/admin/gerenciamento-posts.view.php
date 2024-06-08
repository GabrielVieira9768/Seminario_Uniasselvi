<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/gerenciamento-style.css">
</head>

<body>
    <?php require('app/views/components/sidebar.php'); ?>

    <div class="text-center mb-5">
        <header>
            <h1>Gerenciamento de Posts</h1>
        </header>
    </div>

    <div class="mx-5 p-3">
        <div class="d-flex justify-content-between">
            <div class="col-md-3 mb-3">
                <form action="" method="GET" class="input-group">
                    <input type="search" name="search" class="form-control" placeholder="Pesquisar..." aria-label="Recipient's username" aria-describedby="button-pesquisa">
                    <button class="btn" type="submit" id="button-pesquisa">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
                    </button>
                </form>
            </div>
            <div>
                <button type="button" class="btn" title="Adicionar Novo Post" data-bs-toggle="modal" data-bs-target="#modal-adicionar">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M720-400v-120H600v-80h120v-120h80v120h120v80H800v120h-80Zm-360-80q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm80-80h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0-80Zm0 400Z"/></svg>
                    <span>Adicionar Post</span>
                </button>
                <?php require('app/views/components/modal/posts/create.php'); ?>
            </div>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>TÍTULO</td>
                    <td>AUTOR</td>
                    <td>DATA</td>
                    <td>AÇÕES</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $post) : ?>
                    <tr>
                        <td><?php echo $post->id; ?></td>
                        <td><?php echo $post->title; ?></td>
                        <td><?php echo $post->author; ?></td>
                        <td><?php echo $post->date; ?></td>
                        <td>
                            
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?php if($pagination){require('app/views/components/pagination.php');} ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>