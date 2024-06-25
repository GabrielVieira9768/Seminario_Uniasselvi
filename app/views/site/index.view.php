<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/index-style.css">
    <link rel="stylesheet" href="/public/css/navbar-style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php require('app/views/components/navbar.php'); ?>
    <div class="d-flex justify-content-center my-5">
        <header>
            <h2>Sobre Nós</h2>
        </header>
    </div>

    <div class="mb-5">
        <div class="d-flex justify-content-center mb-3">
            <h2>
                <span>Posts Recentes</span>
            </h2>
        </div>
        <div class="d-flex justify-content-center flex-wrap mx-4">
            <?php foreach (array_slice($posts, 0, 3) as $post) : ?>
                <div class="card mx-2 mb-3 card-post" style="width: 18rem;">
                    <img src="/<?= $post->image; ?>" class="card-img-top fixed-height-image" alt="Imagem do post">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $post->title ?></h5>
                        <p class="card-text"><?php echo $post->author; ?></p>
                        <div class="d-flex justify-content-center">
                            <form method="post" action="post">
                                <input type="hidden" name="id" value="<?php echo $post->id ?>">
                                <button type="submit" class="btn d-flex align-items-center botao-index">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="rgb(55, 55, 55)">
                                        <path d="M400-400h160v-80H400v80Zm0-120h320v-80H400v80Zm0-120h320v-80H400v80Zm-80 400q-33 0-56.5-23.5T240-320v-480q0-33 23.5-56.5T320-880h480q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H320Zm0-80h480v-480H320v480ZM160-80q-33 0-56.5-23.5T80-160v-560h80v560h560v80H160Zm160-720v480-480Z" />
                                    </svg>
                                    <span class="span-text">Post Completo</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>