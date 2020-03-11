<div class="modal fade" id="excluir_funcionarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Excluir Funcionários</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="excluir/funcionarios/enviar_excluir_funcionarios.php" method="POST">

          <label>Funcionário</label>
          <select name="id_funcionario">
          <?php
            include ('conexao.php');
            $sql = "select id_funcionario,pessoa_id_pessoa,nome from funcionario join pessoa on id_pessoa = pessoa_id_pessoa";
            $return = mysqli_query($conexao,$sql);
            while ($row = mysqli_fetch_assoc($return)) {
            echo "<option value=".$row["id_funcionario"].">".$row["nome"]."</option>";
           // echo "<input type='hidden' value = ".$row['pessoa_id_pessoa']." name = 'id_pessoa'>";
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