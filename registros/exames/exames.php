<div class="modal fade" id="exames" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cadastro de exames</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="registros/exames/enviar_exames.php" method="POST">
          <label>ID:</label>
          <select>
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
        <label>Nome do exame:</label>
        <input type="text" name="descricaoExame" size="30" placeholder="descrição do exame">
        <label>Tipo de exame:</label>
          <select>
            <option>opção</option>
            <option>nenhum</option>
          </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-sm btn-danger" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn-sm btn-primary">Salvar</button>
		</form>
      </div>
    </div>
  </div>
</div>