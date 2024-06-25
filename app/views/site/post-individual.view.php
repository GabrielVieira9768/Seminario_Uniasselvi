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
    <div class="container my-5">
        <div class="">
            <h2 class="text-left"><?php echo $post->title ?></h2>
            <p class="card-text"><small class="text-body-secondary"> DATA: <?php echo date('d/m/Y', strtotime($post->date)); ?></small></p>
            <div class="align-items-center custom-post-container">
                <div class="image-container">
                    <img src="/<?= $post->image; ?>" class="img-fluid rounded" alt="Imagem do post">
                </div>
                <div class="text-container">
                    <div class="pl-md-3">
                        <p class="card-text"><?php echo $post->content ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>