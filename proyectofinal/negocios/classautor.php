<?php
require_once('..\proybiblioteca\data\classdata.php');
class autor
{
	public function insertar($datos=array())
	{
		$db = new datos();
		$db->conectar();
		foreach ($datos as $campo => $valor) {
			$$campo =$valor;
		}
		$cadena = "INSERT INTO autor(nombre,apellido,fechanac) VALUES('$nombre','$apellido''$fechanac')";
		$consulta = mysqli_query($db->objconexion,$cadena);
		$db->desconectar();
		echo"<script type=\"text/javascript\">alert(\"Autor Agregado con Éxito\");</script>";
	}
	public function listar()
	{
		$bd = new datos();
		$bd->conectar();
		$consulta = "SELECT * FROM autor";
		$dt=mysqli_query($bd->objconexion,$consulta);
		$bd->desconectar();
		return $dt;
	}
	public function listarn()
	{
		$bd = new datos();
		$bd->conectar();
		$consulta = "SELECT nombre, apellido FROM autor";
		$dt=mysqli_query($bd->objconexion,$consulta);
		$bd->desconectar();
		return $dt;
	}
}

?>
