<a href="#" class="btn-sm btn-primary" data-toggle="modal" data-target="#buscar_paciente">Buscar Paciente</a><br>


<div class="modal fade" id="buscar_paciente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Busca de Pacientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	
	<form action='buscar/enviar_busca.php' method='POST'>

	<h2>Buscar paciente por cpf:</h2>

	<input type='text' name='cpf'>
	</input><br><br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn-sm btn-danger" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn-sm btn-primary">Procurar Paciente</button>
      </div>
      </form>
    </div>
  </div>
</div>




