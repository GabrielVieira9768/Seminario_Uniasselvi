<div class="modal fade" id="modal-update-<?php echo $user->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="/usuarios/update" method="POST">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Funcionário</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input value="<?php echo $user->name; ?>" type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input value="<?php echo $user->email; ?>"" type=" email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3 d-flex justify-content-between">
                        <div>
                            <label for="cpf" class="form-label">CPF</label>
                            <input value="<?php echo $user->cpf; ?>"" type=" text" name="cpf" class="form-control" id="cpf">
                        </div>
                        <div>
                            <label for="phone" class="form-label">Telefone</label>
                            <input value="<?php echo $user->phone; ?>"" type=" text" name="phone" class="form-control" id="phone">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input value="<?php echo $user->password; ?>"" type=" password" name="password" class="form-control" id="password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>