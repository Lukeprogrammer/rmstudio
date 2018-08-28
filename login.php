<!DOCTYPE html>
<html lang="pt-br">

<head>

	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width; initial-scale=1.0">

	  <title>Logar</title>
	  <link rel="icon" href="imagens/rmstudio.png">

	  <!-- Bootstrap -->
	  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link href="css/estilo.css" rel="stylesheet">
	  
	  <!-- font -->
	  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	  <!-- aos library -->
	  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">


	  <!-- HTML5 Shim e Respond.js para suporte ao IE8 de elementos HTML5 e consultas de mídia -->
	  <!-- AVISO: o Respond.js não funciona se você visualizar a página via file: // -->
	  <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	
</head>
<body>
	<!-- Nav -->
	<nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
    <div class="container">

      <!-- Header -->
      <div class="navbar-header">

        <!-- botao toggle -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
            <span class="sr-only">alternar navegação</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        <a href="index.html" class="navbar-brand">
            <span class="img-logo">RM-studio</span>
          </a>

      </div>

      <!-- Navbar -->
      <div class="collapse navbar-collapse" id="barra-navegacao">
        <ul class="nav navbar-nav navbar-right ">
          <li><a href="">Cursos</a></li>
          <li><a href="">Apostilas</a></li>
          <li class="divisor" role="separator"></li>
          <li><a href="cadastro.php">Inscrever-se</a></li>
          <li><a href="" data-toggle="modal" data-target="#janela">Entrar</a></li>
        </ul>
      </div>

    </div><!-- /container -->

  </nav><!-- /nav -->
<br/> <br/><br/> <br/><br/> <br/><br/> <br/>

	<form name="signup" action="logando.php" method="post" >
		E-mail: <input type="email" name="email"  placeholder="exemplo@provedor.com" ><br/> <br/>
		Senha: <input type="password" name="senha" minlength="7" maxlength="14" ><br/> <br/>
		<input class="btn btn-custom btn-lg" type="submit" value="Logar" >			
		<a class="btn btn-custom btn-lg" href="cadastro.php" role="button">Inscreva-se</a>
		
	</form>
</body>
</html>