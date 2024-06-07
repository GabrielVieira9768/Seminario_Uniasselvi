<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php if($pagination){require('app/views/components/sidebar.php');} ?>

    <header>
        <h1>Gerenciamento de Funcionários</h1>
    </header>

    <div>
        <div class="mb-3">
            <form action="/usuarios/busca" method="GET" class="input-group">
                <input type="search" name="search" class="form-control" placeholder="Pesquisar..." aria-label="Recipient's username" aria-describedby="button-pesquisa">
                <button class="btn" type="submit" id="button-pesquisa">Button</button>
            </form>
        </div>
        <div>
            <button type="button" class="btn" title="Cadastrar Novo Funcionário" data-bs-toggle="modal" data-bs-target="#modal-adicionar">
                <span>Adicionar Funcionário</span>
            </button>
            <?php require('app/views/components/modal/users/create.php'); ?>
        </div>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <td>ID</td>
                <td>NOME</td>
                <td>EMAIL</td>
                <td>AÇÕES</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $user->id; ?></td>
                    <td><?php echo $user->name; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td>
                        <div>
                            <button type="button" class="btn" title="Visualizar Informações" data-bs-toggle="modal" data-bs-target="#modal-show-<?php echo $user->id; ?>">
                                <span>Show</span>
                            </button>
                            <?php require('app/views/components/modal/users/show.php'); ?>
                        </div>
                        <div>
                            <button type="button" class="btn" title="Editar Informações" data-bs-toggle="modal" data-bs-target="#modal-update-<?php echo $user->id; ?>">
                                <span>Edit</span>
                            </button>
                            <?php require('app/views/components/modal/users/update.php'); ?>
                        </div>
                        <div>
                            <button type="button" class="btn" title="Deletar Usuário" data-bs-toggle="modal" data-bs-target="#modal-delete-<?php echo $user->id; ?>">
                                <span>Deletar</span>
                            </button>
                            <?php require('app/views/components/modal/users/delete.php'); ?>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php if($pagination){require('app/views/components/pagination.php');} ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script type="text/javascript" src="../../../public/js/modals.js"></script>
</html>