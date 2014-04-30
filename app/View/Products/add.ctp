<h1>Agregar products</h1>
<?php 
	echo $this->Form->create('Product');
	echo $this->Form->input('name', array('label'=> 'Nombre'));
	echo $this->Form->input('description', array('label'=> 'Descripción'));
	echo $this->Form->end('Guardar producto');
	
?>