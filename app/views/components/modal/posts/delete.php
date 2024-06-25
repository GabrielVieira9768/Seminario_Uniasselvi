<div class="modal fade" id="modal-delete-<?php echo $post->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="/posts/delete" method="POST">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Deletar Post</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body delete-conteudo">
                    <p>Tem certeza que deseja deletar este post?</p>
                    <input type="hidden" name="id" value="<?= $post->id ?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn modal-botao" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn modal-botao">Deletar</button>
                </div>
            </form>
        </div>
    </div>
</div>