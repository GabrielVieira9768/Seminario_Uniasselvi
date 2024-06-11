<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/post-individual-style.css">
</head>

<body>
    <?php require('app/views/components/navbar.php'); ?>
    <div class="d-flex justify-content-center my-5">
        <header>
            <h2><?php echo $post->title ?></h2>
        </header>
    </div>

    <div>
        <div class="card mx-2 mb-3 d-flex" style="height: 200px; width: 540px;">
            <img src="/<?= $post->image; ?>" class="card-img-left flex-grow-0 fixed-width-image rounded-start" alt="Imagem do post">
            <div class="card-body">
                <p class="card-text"><?php echo $post->content ?></p>
                <p class="card-text"><small class="text-body-secondary"><?php echo date('d/m/Y', strtotime($post->date)); ?></small></p>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>