<div class="modal fade" id="tiposexames" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cadastro de tipos de exames</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="registros/tipos_exames/enviar_tipos_exames.php" method="POST">
          <label>ID:</label>
          <select name="id">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
        <label>Tipo de exame:</label>
        <input type="text" name="tipoExame" size="30" placeholder="qual tipo pertence?">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-sm btn-danger" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn-sm btn-primary">Salvar</button>
      </div>
    </div>
    </form>
  </div>
</div>