<h1>Listado de alumnos</h1>
	
	<table>
		<th>Id</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<?php 
			foreach ($estudiantes as $k => $estudiante) { ?>
				<tr>
					<td><?php echo $estudiante['Student']['id']; ?></td>
					<td><?php echo $estudiante['Student']['name']; ?></td>
					<td><?php echo $estudiante['Student']['last_name']; ?></td>
				</tr>
				
		<?php  }
		 ?>
	</table>