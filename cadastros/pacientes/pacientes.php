<div class="modal fade" id="pacientes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cadastro de pacientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="cadastros/pacientes/enviar_pacientes.php" method="POST">
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
      </select><br>
      <label>Responsável:</label>
      <select name="responsavel">
		<option value="999999">nenhum</option>
		<?php
			include ('../../conexao.php');
			$sql = "select responsavel.id_responsavel,pessoa.nome from responsavel join pessoa on pessoa_id_pessoa = id_pessoa";
			$return = mysqli_query($conexao,$sql);
			while ($row = mysqli_fetch_assoc($return)) {
					echo "<option>".$row["id_responsavel"].' - '.$row["nome"]."</option>";
				}
		?>
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