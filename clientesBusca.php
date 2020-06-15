<?php
	include_once('conexao.php');
	if (isset($_POST['id']))
	{
		$id = $_POST['id'];
		$sql = "SELECT * FROM cliente WHERE cod_cliente = $id";
		$result = $mysqli->query($sql);
		$row = mysqli_fetch_array($result);
		echo json_encode($row);
	}
?>

