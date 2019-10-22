<!DOCTYPE html>
<html>
<head>
	<title>Listado de Libros</title>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body class="bg-light">
	<?php
		require_once('negocios\classlibro.php');
		$libro = new libro();
		$dt=$libro->listar();
	?>
<!--BARRA DE NAVEGACIÓN -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Biblioteca Proyecto Final</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarsExample05" style="">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Estudiantes</a>
            <div class="dropdown-menu" aria-labelledby="dropdown05">
              <a class="dropdown-item" href="#">Ingresar Estudiante</a>
              <a class="dropdown-item" href="#">Listado de Estudiantes</a>

           </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Préstamos</a>
            <div class="dropdown-menu" aria-labelledby="dropdown05">
              <a class="dropdown-item" href="#">Nuevo Préstamo</a>
              <a class="dropdown-item" href="#">Buscar Préstamo</a>
              <a class="dropdown-item" href="#">Devolución</a>
           </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Usuarios</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Libros</a>
            <div class="dropdown-menu" aria-labelledby="dropdown05">
              <a class="dropdown-item" href="http://localhost/proyectofinal/listarlibros.php">Listado de Libros</a>
              <a class="dropdown-item" href="http://localhost/proyectofinal/insertarlibros.php">Agregar Nuevo Libro</a>
           </div>
          </li>
        </ul>

      </div>
    </nav>
<!-- *************************************************************************************************************************** -->
<main role="main" class="container">


    <div class="my-3 p-3 bg-white rounded shadow-sm">
      <h4 class="border-bottom border-gray pb-2 mb-0">Listado de Libros</h4>
	<table id="tabla_libro" class="table table-hover">
		<thead>
			<tr>

				<th>Título</th>
        <th>Edición</th>
        <th>Autor</th>
        <th>Editorial</th>
        <th>Categoría</th>


			</tr>
		</thead>
		<?php
		while($row = mysqli_fetch_array($dt))
		{
			echo '<tr>';
			echo '<td>' .$row['titulo']. '</td>';
			echo '<td>' .$row['edicion']. '</td>';
      echo '<td>' .$row['nombre'] .$row['apellido']. '</td>';
      echo '<td>' .$row['nombreedit']. '</td>';
      echo '<td>' .$row['nombrecat']. '</td>';
      echo '</tr>';
		}
		?>
	</table>

  </div>


</main>
</body>
<!--CODIGO PARA BUSCAR EN LA TABLA -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.datatables.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</html>
<script>
  $(document).ready(function(){
    $('#tabla_libro').dataTable();
  })
</script>
