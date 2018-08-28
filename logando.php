<?php 
	include('conexao.php');
	//caso vazio atualiza a pagina
	if(empty($_POST['email']) || empty($_POST['senha'])) {
		header('Location: login.php');
		exit();
	}

	$email = mysql_real_escape_string($conexao, $_POST['email']);	
	$senha = mysql_real_escape_string($conexao, $_POST['senha']);

	$query = "SELECT 'email', 'senha' FROM usuarios WHERE email = '$email' AND senha = md5('$senha')";

	$result = mysqli_query($conexao, $query);

	$row = mysqli_num_rows($result); 

	if ($row == 1) {
		$_SESSION['email'] = $email;
		header('Location: login.php');
		exit();
	}else {
		header('Location: login.php');
		exit();
	}
 ?>