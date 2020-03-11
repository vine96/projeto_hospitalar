<div class="modal fade" id="responsaveis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cadastro de responsáveis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="cadastros/responsaveis/enviar_responsaveis.php" method="POST">
      		<label>Nome:</label>
  <input type="text" placeholder="Digite o nome completo" name="nome" size="40" required><br>
  <label>CPF:</label>
  <input name="cpf" type="text" class="cpf" placeholder="000.000.000-00" required>
  <label>RG:</label>
  <input type="text" placeholder="00.000.000-0" size="15" maxlength="12" name="rg" required>
  <label>Nascimento:</label>
  <input type="text" name="nascimento" class="nascimento" maxlength="10" placeholder="00/00/0000" onkeypress="mascaraData(this)" />
  
  
  <label>Estado civil:</label>
  <select name="estadoCivil">
    <option value="solteiro">solteiro</option>
    <option value="casado">casado</option>
    <option value="separado">separado</option>
    <option value="divorciado">divorciado</option>
    <option value="viúvo">viúvo</option>
  </select>
  <label>Sexo:</label>
  <select name="sexo">
    <option value="masculino">masculino</option>
    <option value="feminino">feminino</option>
      </select><br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn-sm btn-danger" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn-sm btn-primary">Salvar</button>
      </div>
        </form>
    </div>
  </div>
</div>