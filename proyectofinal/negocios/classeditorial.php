<?php
require_once('..\proybiblioteca\data\classdata.php');
class editorial
{
	public function insertar($datos=array())
	{
		$db = new datos();
		$db->conectar();
		foreach ($datos as $campo => $valor) {
			$$campo =$valor;
		}
		$cadena = "INSERT INTO editorial(nombre,direccion) VALUES('$nombre','$direccion')";
		$consulta = mysqli_query($db->objconexion,$cadena);
		$db->desconectar();
		echo"<script type=\"text/javascript\">alert(\"Editorial Agregada con Éxito\");</script>";
	}
	public function listar()
	{
		$bd = new datos();
		$bd->conectar();
		$consulta = "SELECT nombre FROM editorial";
		$dt=mysqli_query($bd->objconexion,$consulta);
		$bd->desconectar();
		return $dt;
	}

}

?>
