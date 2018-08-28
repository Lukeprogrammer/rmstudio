<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	  <title>Inscrever-se</title>
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
	<br/> <br/> <br/> <br/> <br/> <br/>
	<form name="signup" action="process.php" method="post" >
		<label>Nome:</label> <input type="text" name="nome" maxlength="40" required autofocus placeholder="Nome"> <br/> <br/>
		
		<label>Sobrenome:</label> <input type="text" name="sobrenome" maxlength="50" required placeholder="Sobrenome" > <br/> <br/>
		
		<label>Idade:</label> <input id="idade" type="text" name="idade" placeholder="00/00/0000" maxlength="8"><br/> <br/>
		
		<label>Celular:</label> <input id="celular" type="text" name="celular" maxlength="11" placeholder="(xx)xxxxx-xxxx"> <br/> <br/>
		
		<label>Prontúario:</label> <input type="text" name="prontuario" maxlength="9"> <br/> <br/>
		
		<label>E-mail:</label> <input type="email" name="email" required placeholder="exemplo@provedor.com" ><br/> <br/>
		
		<label>Senha:</label> <input type="password" name="senha" minlength="7" maxlength="14" required>

		<br/> <br/>			
		<input class="btn btn-custom btn-lg" id="btn_submit" type="submit" value="Cadastrar" >
		<input class="btn btn-custom btn-lg" id="btn_reset" type="reset" value="Limpar">
	</form>

	<!-- Rodapé --> 
  <footer id="rodape"> 
    <div class="container">
      <div class="row">
        
        <div class="col-md-2">
          <span class="img-logo-rodape"> RMStudio</span>
        </div>

        <div class="col-md-3">
          <h4>Sobre Nós</h4>
          <ul class="nav">
            <li><a href="#">Escola</a></li>
            <li><a href="#">Instrutores</a></li>
            <li><a href="#">História</a></li>
            <li><a href="#">Parcerias</a></li>
          </ul>
        </div>

        <div class="col-md-3">
          <h4>Contato</h4>
          <ul class="nav">
            <li><a>E-mail  : rmstudio@gmail.com</a></li>
            <li><a>Escola  : (00) 00000-0000</a></li>
            <li><a>Instrutor Rafael  : (00) 00000-0000</a></li>
            <li><a>Instrutor Matheus : (00) 00000-0000</a></li>
          </ul>
        </div>

        <div class="col-md-1">
         <ul class="nav ">
              <li class="item-rede-social"><a href="#"><img src="imagens/facebook.png"></a></li>
            </ul>
          
        </div>

        <div class="col-md-2">
         <ul class="nav ">
              <li class="item-rede-social"><a href="#"><img src="imagens/instagram.png"></a></li>
            </ul>
          
        </div>


      </div> <!-- /row -->
    </div> <!-- /container --> 

  </footer>

	<!-- jQuery (necessário para plugins JavaScript do Bootstrap) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Inclua todos os plugins compilados (abaixo) ou inclua arquivos individuais conforme necessário -->
  <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
  <script src="js/jquery.mask.min.js" type="text/javascript"></script>
  <script src="js/mask.form.js"></script>
  <script src="js/cadastro.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  <script>
    AOS.init ({
       duration: 950
    });
  </script>
</body>	
</html>
