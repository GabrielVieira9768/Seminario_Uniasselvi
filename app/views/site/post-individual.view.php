<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/post-individual-style.css">
    <link rel="stylesheet" href="/public/css/navbar-style.css">
    <link rel="stylesheet" href="/public/css/footer-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php require('app/views/components/navbar.php'); ?>
    <div class="container my-5">
        <div class="">
            <div>
                <h2 class="text-left post-title"><?php echo $post->title ?></h2>
                <p class="card-text author-date"><small class="text-body-secondary"><?php echo $post->author ?> - <?php echo date('d/m/Y', strtotime($post->date)); ?></small></p>

                <div class="text-container">
                    <div class="row">
                        <div class="col-md-7">
                            <?php
                            $linhas = explode("\n", $post->content);

                            foreach ($linhas as $linha) {
                                $linha = trim($linha);
                                if (!empty($linha)) {
                                    echo '<p class="card-text conteudo">' . nl2br($linha) . '</p>';
                                }
                            }
                            ?>
                        </div>
                        <div class="col-md-5 d-flex justify-content-end mb-2">
                            <div class="image-container">
                                <img src="/<?= $post->image; ?>" class="img-fluid rounded" alt="Imagem do post">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php require('app/views/components/footer.php'); ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>