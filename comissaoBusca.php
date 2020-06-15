<?php
	include_once('conexao.php');
	if (isset($_POST['id']))
	{
		$id = $_POST['id'];
		$sql = "SELECT * FROM comissao WHERE cod_comissao = $id";
		$result = $mysqli->query($sql);
		$row = mysqli_fetch_array($result);
		echo json_encode($row);
	}
?>

