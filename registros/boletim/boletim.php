<div class="modal fade" id="boletim" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Registro de boletim</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="registros/boletim/enviar_boletim.php" method="POST">
          <label>Paciente:</label>
          <select name="paciente">
          <?php
            include ('conexao.php');
            $sql = "select paciente.id_paciente,pessoa.nome from paciente join pessoa on pessoa_id_pessoa = id_pessoa";
            $return = mysqli_query($conexao,$sql);
            while ($row = mysqli_fetch_assoc($return)) {
              echo "<option>".$row["id_paciente"].' - '.$row["nome"]."</option>";
            }
          ?>
          </select>
          <br>
          <label>Peso:</label>
          <input type="text" name="peso" size="30" placeholder="Peso"><br>
          <label>Temperatura:</label>
          <input type="text" name="temperatura" size="30" placeholder="Temperatura"><br>
          <label>Frequencia Cardíaca:</label>
          <input type="text" name="frequencia_cardiaca" size="30" placeholder="Frequencia Cardiaca"><br>
          <label>Dor:</label>
          <select name="dor">
            <option>Sim</option>
            <option>Não</option>
          </select>
          <label>Pressao:</label>
          <input type="text" name="sinais_vitais" placeholder="Pressão"><br>
          <label>Hipótese:</label>
          <input type="text" name="hipotese" placeholder="Hipótese"><br>
          <label>Prioridade:</label>
          <select name="prioridade">
          <?php
            include ('conexao.php');
            $sql = "select id_prioridade,descricao from prioridade";
            $return = mysqli_query($conexao,$sql);
            while ($row = mysqli_fetch_assoc($return)) {
            echo "<option value=".$row["id_prioridade"].">".$row["descricao"]."</option>";
            }
          ?>
          </select>
          <br>
          <div class="modal-footer">
            <button type="button" class="btn-sm btn-danger" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn-sm btn-primary">Salvar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>