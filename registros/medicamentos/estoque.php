<div class="modal fade" id="estoque" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Manutenção do estoque</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="registros/medicamentos/enviar_estoque.php" method="POST">
          <label>Quantidade para adicionar ou remover (coloque o sinal de menos '-' para remover)</label>
          <input type="text" name="quantidade">
          <br>
          <label>Remédio</label>
          <select name="remedio">
          <?php
            include ('conexao.php');
            $sql = "select id_remedio,nome from remedio";
            $return = mysqli_query($conexao,$sql);
            while ($row = mysqli_fetch_assoc($return)) {
            echo "<option value=".$row["id_remedio"].">".$row["nome"]."</option>";
            }
          ?>
          </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-sm btn-danger" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn-sm btn-primary">Salvar</button>
      </div>
      </form>
    </div>
  </div>
</div>