<div class="modal fade" id="pessoas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cadastro de pessoas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="cadastros/pessoas/enviar_pessoas.php" method="POST">
  
  <label>Nome:</label>
  <input type="text" placeholder="Digite o nome completo" name="nome" size="40" required><br>
  <label>CPF:</label>
  <input type="text" placeholder="000.000.000-00" name="cpf" required>
  <label>RG:</label>
  <input type="text" placeholder="00.000.000-0" size="15" name="rg" required>
  <label>Nascimento:</label>
  <input type="date" placeholder="data de nascimento" name="nascimento" required>
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