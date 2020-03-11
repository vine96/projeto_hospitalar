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

$sql = ("SELECT id_remedio, fabricante, serie, data_validade, data_fabricacao, contraindicacao, nome, posologia FROM remedio");
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

    <div class="modal fade bd-example-modal-lg" id="listar_medicamentos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <h1>Medicamentos cadastrados:</h1>
       <?php
    // se o número de resultados for maior que zero, mostra os dados
    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        echo "<table border='1'>
              <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Fabricante</th>
              <th>Série</th>
              <th>Data de Validade</th>
              <th>Data de Fabricação</th>
              <th>Contra-indicação</th>
              <th>Posologia</th>
              </tr>";
        
        do {
        
            
              echo "
              <tr>
              <td>".$linha['id_remedio']."</td>
              <td>".$linha['nome']."</td>
              <td>".$linha['fabricante']."</td>
              <td>".$linha['serie']."</td>
              <td>".$linha['data_validade']."</td>
              <td>".$linha['data_fabricacao']."</td>
              <td>".$linha['contraindicacao']."</td>
              <td>".$linha['posologia']."</td>
              </tr>
              ";
          
            

        // finaliza o loop que vai mostrar os dados
        }while($linha = mysqli_fetch_assoc($dados));
    // fim do if 
        echo "</table>";
    }
?>
<div class="modal-footer">
        <button type="button" class="btn-sm btn-danger" data-dismiss="modal">Fechar</button>
      </div>

      </div>
      
    </div>
  </div>
</div>

</body>
</html>


