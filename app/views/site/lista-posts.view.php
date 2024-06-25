<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista de Posts</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/lista-posts-style.css">
    <link rel="stylesheet" href="/public/css/pagination-style.css">
</head>

<body>
    <?php require('app/views/components/navbar.php'); ?>
    <div class="text-center my-5">
        <header>
            <h1>Lista de Posts</h1>
        </header>
    </div>

    <div>
        <div class="d-flex justify-content-center mb-5 mx-auto" style="max-width: 540px;">
            <form action="/lista-posts/busca" method="GET" class="input-group">
                <input type="search" name="search" class="form-control" placeholder="Pesquisar..." aria-label="Recipient's username" aria-describedby="button-pesquisa">
                <button class="btn" type="submit" id="button-pesquisa">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                        <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                    </svg>
                </button>
            </form>
        </div>
    </div>

    <div class="d-flex justify-content-center flex-wrap mx-4">
        <?php foreach ($posts as $post) : ?>
            <div class="mx-2 mb-3">
                <form action="post" method="POST">
                    <input type="hidden" name="id" value="<?php echo $post->id ?>">
                    <button type="submit" class="btn m-0 p-0 ">
                        <div class="card d-flex" style="height: 200px; width: 540px;">
                            <img src="/<?= $post->image; ?>" class="card-img-left flex-grow-0 fixed-width-image rounded-start" alt="Imagem do post">
                            <div class="card-body d-flex flex-column justify-content-between text-left">
                                <div>
                                    <h5 class="card-title" style="text-align: left;"><?php echo $post->title ?></h5>
                                    <p class="card-text" style="text-align: left;"><?php echo substr($post->content, 0, 160) . "..." ?></p>
                                </div>
                                <div class="mt-auto">
                                    <p class="card-text" style="text-align: left;"><small class="text-body-secondary"><?php echo date('d/m/Y', strtotime($post->date)); ?></small></p>
                                </div>
                            </div>
                        </div>
                    </button>
                </form>
            </div>

        <?php endforeach; ?>
    </div>

    <?php if ($posts == null) { ?>
        <div class="d-flex justify-content-center align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                <path d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm-40-160h80v-240h-80v240ZM330-120 120-330v-300l210-210h300l210 210v300L630-120H330Zm34-80h232l164-164v-232L596-760H364L200-596v232l164 164Zm116-280Z" />
            </svg>
            Nenhum Post encontrado!
        </div>
    <?php } ?>

    <?php if ($pagination && $posts != null) {
        require('app/views/components/pagination.php');
    } ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>