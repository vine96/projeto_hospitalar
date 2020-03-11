<div class="modal fade" id="cargos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cadastro de cargos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	
	<form action="cadastros/cargos/enviar_cargos.php" method="POST">
	
	<label>Escolha o tipo de permissão</label>
  <select name="permissao">
    <option value="total">1 - total</option>
    <option value="cadastros">2 - cadastros</option>
    <option value="registros">3 - registros</option>
    <option value="usuários">4 - usuários</option>
  </select><br>

  <label>Nome do cargo</label>
	<input type="text" placeholder="Digite o nome do cargo" name="descricao">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn-sm btn-danger" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn-sm btn-primary">Salvar</button>
      </div>
      </form>
    </div>
  </div>
</div>