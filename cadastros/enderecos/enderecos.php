<div class="modal fade" id="enderecos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cadastro de endereços</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="cadastros/enderecos/enviar_enderecos.php" method="POST">
  
  <label>Digite o CEP:</label>
  <input type="text" placeholder="00000-000" size="14" id="cep" required name="cep">
  <label>Bairro:</label>
  <input type="text" placeholder="nome" id="bairro" size="15" name="bairro" required>
  <label>Número:</label>
  <input type="text" placeholder="0000" size="5" name="numero" required>
  <label>Rua:</label>
  <input type="text" placeholder="nome" id="rua" size="30" name="rua" required>
  <label>Complemento:</label>
  <input type="texto" placeholder="se necessário" size="14" name="complemento">
  <label>Estado:</label>
  <input type="text" placeholder="digite o estado" id="estado" name="estado" required>
  <label>Cidade:</label>
  <input type="text" placeholder="digite a cidade" id="cidade" name="cidade" required>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-sm btn-danger" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn-sm btn-primary">Salvar</button>
        </form>
      </div>
    </div>
  </div>
</div>