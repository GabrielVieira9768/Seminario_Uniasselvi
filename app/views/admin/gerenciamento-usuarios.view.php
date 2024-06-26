<?php require('app/views/components/autentication.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Usuários</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/gerenciamento-style.css">
    <link rel="stylesheet" href="/public/css/pagination-style.css">
    <link rel="stylesheet" href="/public/css/sidebar-style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php require('app/views/components/sidebar.php'); ?>

    <div class="text-center mb-5">
        <header>
            <h1 class="titulo">Gerenciamento de Usuários</h1>
        </header>
    </div>

    <div class="mx-5 p-3">
        <div class="d-flex justify-content-between">
            <div class="col-md-3 mb-3">
                <form action="/usuarios/busca" method="GET" class="input-group">
                    <input type="search" name="search" class="form-control input-pesquisa" placeholder="Pesquisar..." aria-label="Recipient's username" aria-describedby="button-pesquisa">
                    <button class="btn search-botao" type="submit" id="button-pesquisa">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
                    </button>
                </form>
            </div>
            <div>
                <?php if($_SESSION['auth'][0]->isAdmin){ ?>
                    <button type="button" class="btn d-flex align-items-center botao" title="Cadastrar Novo Usuário" data-bs-toggle="modal" data-bs-target="#modal-adicionar">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M720-400v-120H600v-80h120v-120h80v120h120v80H800v120h-80Zm-360-80q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm80-80h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0-80Zm0 400Z"/></svg>
                        <span class="span-text">Adicionar Usuário</span>
                    </button>
                    <?php require('app/views/components/modal/users/create.php'); ?>
                <?php } ?>
            </div>
        </div>

        <table class="table table-hover">
            <thead class="thead-tabela">
                <tr>
                    <td>ID</td>
                    <td>NOME</td>
                    <td>EMAIL</td>
                    <td>TELEFONE</td>
                    <td class="text-center">AÇÕES</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?php echo $user->id; ?></td>
                        <td><?php echo $user->name; ?></td>
                        <td><?php echo $user->email; ?></td>
                        <td><?php echo $user->phone; ?></td>
                        <td>
                            <div class="d-flex justify-content-center flex-wrap">
                                <div class="mx-2">
                                    <button type="button" class="btn botao" title="Visualizar Informações" data-bs-toggle="modal" data-bs-target="#modal-show-<?php echo $user->id; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/></svg>
                                    </button>
                                    <?php require('app/views/components/modal/users/show.php'); ?>
                                </div>
                                <?php if($_SESSION['auth'][0]->isAdmin || !strcmp($_SESSION['auth'][0]->cpf, $user->cpf)){ ?>
                                    <div class="mx-2">
                                        <button type="button" class="btn botao" title="Editar Informações" data-bs-toggle="modal" data-bs-target="#modal-update-<?php echo $user->id; ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg>
                                        </button>
                                        <?php require('app/views/components/modal/users/update.php'); ?>
                                    </div>
                                <?php } ?>
                                <?php if($_SESSION['auth'][0]->isAdmin || !strcmp($_SESSION['auth'][0]->cpf, $user->cpf)){ ?>
                                    <div class="mx-2">
                                        <button type="button" class="btn botao" title="Deletar Usuário" data-bs-toggle="modal" data-bs-target="#modal-delete-<?php echo $user->id; ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                                        </button>
                                        <?php require('app/views/components/modal/users/delete.php'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php if($users == null){ ?>
            <div class="d-flex justify-content-center align-items-center h5">
                <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#333e50"><path d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm-40-160h80v-240h-80v240ZM330-120 120-330v-300l210-210h300l210 210v300L630-120H330Zm34-80h232l164-164v-232L596-760H364L200-596v232l164 164Zm116-280Z"/></svg>
                Nenhum usuário encontrado!
            </div>
        <?php } ?>

        <?php if($pagination && $users != null){require('app/views/components/pagination.php');} ?>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
    $(document).ready(function() {
        $('.cpf-mask').mask('000.000.000-00', {reverse: true});

        $('.phone-mask').mask('(00) 00000-0000');
    });
</script>

</html>