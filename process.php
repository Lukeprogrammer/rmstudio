<?php 
	//chamando pagina conexao com o BD
	INCLUDE("conexao.php");
	//chamandos atributos do formulário cadastro
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$idade = $_POST['idade'];
	$celular = $_POST['celular'];
	$prontuario = $_POST['prontuario'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	//procura o prontuário no banco

	$query;
	$query_result;
	$row;
	$prontuario_valido = false;

	$query = "SELECT COUNT(*) AS COUNT_PRONTUARIO FROM prontuarios WHERE prontuario = '$prontuario'";
	print_r($query);
	$query_result = mysqli_query($conexao, $query);

	$row = mysqli_fetch_assoc($query_result);

	if($row["COUNT_PRONTUARIO"][0] > 0)
	    $prontuario_valido = true;

	if(!$prontuario_valido)
	    die("Prontuário não encontrado :( ");
	 
	//grava usuário no banco

	$query = "INSERT INTO usuarios (nome, sobrenome, idade, celular, email, senha)
	VALUES
	('$nome', '$sobrenome', '$idade', '$celular', '$email', '$senha')";

	$query_result = mysqli_query($conexao, $query);

	if($query_result)
	    die("Usuário cadastrado! :) ");

	mysqli_close($conexao);
	/*
	//consultando o prontuario
	$sqlprontuario = "SELECT * FROM prontuarios";
	$consulta = mysqli_query($conexao, $sqlprontuario);
	$registros = mysqli_num_rows($consulta);

	print "$registros registros encontrados.";*/

/*
	//inserindo dados do usúario
	$sqlusuario = "INSERT INTO usuarios (nome, sobrenome, idade, celular, email, senha) VALUES ('$nome', '$sobrenome', '$idade', '$celular', '$email', '$senha')";

	$salvar = mysqli_query($conexao, $sqlusuario);
	$linhas = mysqli_affected_rows($conexao);*/
?>
