<div class="modal fade" id="medicamentos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cadastro de medicamentos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="registros/medicamentos/enviar_medicamentos.php" method="POST">
          <label>Nome:</label>
          <input type="text" name="nome_medicamento" size="30" placeholder="nome do medicamento">
          <label>Fabricante:</label>
          <input type="text" name="fabricante" size="30" placeholder="nome do fabricante">
          <label>Série:</label>
          <input type="text" name="serie" size="30" placeholder="série do medicamento">
          <label>Data de Fabricação:</label>
          <input type="date" name="fabricacao"><br>
          <label>Data de Validade:</label>
          <input type="date" name="validade"><br>
          <label>Contra-indicação:</label>
          <input type="text" name="contra_indicacao" size="20" placeholder="tipo de contra-indicação">
          <br>
          <label>Posologia:</label>
          <input type="text" name="posologia" size="20" placeholder="tipo de posologia">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-sm btn-danger" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn-sm btn-primary">Salvar</button>
      </div>
      </form>
    </div>
  </div>
</div>