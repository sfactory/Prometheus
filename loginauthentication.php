<?php
include('conexao.php');
if(empty($_POST['usuario']) || empty($_POST['senha'])){
	header('location: estoque.html');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);	

$query = "select idusuario,usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao,$query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: home.html');
	exit();
}else{
	header('Location: prontuario.html');
	exit();
}
?>