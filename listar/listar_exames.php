<!DOCTYPE html>
<html>
<head>
    <title>teste</title>
    <?php

$user = "root";
$host = 'localhost';
$dbname = "miojo";
$password = '';


$conexao = mysqli_connect($host, $user, $password, $dbname);
mysqli_query($conexao, "SET NAMES 'utf8'");
if (!$conexao) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sql = "SELECT t1.id_exame, t1.descricao_exame, t2.descricao FROM exame t1 JOIN tipo_exame t2 ON t1.id_tipo = t2.id_tipo_exame";





//mysqli_query($conexao,$sql) or die("Erro ao tentar cadastrar registro");
//mysqli_close($conexao);
// executa a query
$dados = mysqli_query($conexao, $sql) or die(mysqli_error());
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);


?>
</head>
<body>

    <div class="modal fade" id="listar_exames" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h1>Lista de tipos de exames:</h1>
       <?php
    // se o número de resultados for maior que zero, mostra os dados
    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        echo "<table border='1'>
              <tr>
              <th>ID</th>
              <th>Descrição</th>
			   <th>Tipo de exame</th>
              </tr>";
        
        do {
        
            
              echo "
              <tr>
              <td>".$linha['id_exame']."</td>
              <td>".$linha['descricao_exame']."</td>
			   <td>".$linha['descricao']."</td>
              </tr>
              ";
          
            

        // finaliza o loop que vai mostrar os dados
        }while($linha = mysqli_fetch_assoc($dados));
    // fim do if 
        echo "</table>";
    }
?>
 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn-sm btn-danger" data-dismiss="modal">Fechar</button>
      </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>


