<?php
require_once('..\proyectofinal\data\classdata.php');
class libro
{
	public function insertar($datos=array())
	{
		$db = new data();
		$db->conectar();
		foreach ($datos as $campo => $valor) {
			$$campo =$valor;
		}
		$cadena = "INSERT INTO libro(titulo, portada, idautor, ideditorial, idcategoria, idestadolibro, edicion, stock) VALUES('$titulo','$portada','$idautor','$ideditorial','$idcategoria','$idestadolibro','$edicion','$stock')";
		$consulta = mysqli_query($db->objconexion,$cadena);
		$db->desconectar();
		echo"<script type=\"text/javascript\">alert(\"Registro Agregado\");</script>";
	}
	public function listar()
	{
		$bd = new data();
		$bd->conectar();
		$consulta = "SELECT titulo,  edicion, autor.nombre, autor.apellido, editorial.nombreedit, categoria.nombrecat    FROM libro INNER JOIN autor ON libro.idautor = autor.idautor INNER JOIN  editorial ON libro.ideditorial = editorial.ideditorial INNER JOIN categoria ON libro.idcategoria = categoria.idcategoria";
		$dt=mysqli_query($bd->objconexion,$consulta);
		$bd->desconectar();
		return $dt;
	}
}

?>
