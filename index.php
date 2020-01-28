<?php

	session_start();

?>

<!DOCTYPE html>

<html lang="pt-br">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="description" content="">

    <meta name="author" content="Cesar Szpak">

    <link rel="icon" href="imagens/favicon.ico">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <title>Nome da Página</title>


    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.css" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">


    <!-- Custom styles for this template -->

    <link href="css/signin.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->

    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <script src="js/ie-emulation-modes-warning.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

      
  </head>



  <?php

  unset($_SESSION['usuarioId'],

  $_SESSION['usuarioNome']);

  ?>



  <body>

    
    <div class="container">

      
      <form class="form-signin" method="POST" action="valida.php">

        <div class="text-center">

          <a href="https://wangwubrasil.com.br/"><img src="imagens/rede.png" class="rounded" alt="Rede Wang Wu Brasil"></a>

        </div>

        <br/>

        <h4 class="form-signin-heading">SISTEMA DE CONTROLE</h4>

        <h5 class="form-signin-heading">ÁREA DE LOGIN</h5>

        <label for="inputEmail" class="sr-only">Email</label>

        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>

        <label for="inputPassword" class="sr-only">Senha</label>

        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>

        <button class="btn btn-lg btn-warning btn-block" type="submit">Acessar</button>

        <br/>

        <br/>

        <br/>

        <div class="text-center">

          <i class="fa fa-cogs" style="font-size:28px"></i>

          <h6 class="form-signin-heading">© WANG WU WEB APLICATION - 2018</h6>

        </div>

      </form>


	  <p class="text-center text-danger">

			<?php if(isset($_SESSION['loginErro'])){

				echo $_SESSION['loginErro'];

				unset($_SESSION['loginErro']);

			}?>

		</p>

		<p class="text-center text-success">

			<?php 

			if(isset($_SESSION['logindeslogado'])){

				echo $_SESSION['logindeslogado'];

				unset($_SESSION['logindeslogado']);

			}

			?>

		</p>

    <p class="text-center text-danger">

      <?php

        if (isset($_SESSION['security'])) {

          echo $_SESSION['security'];

          unset($_SESSION['security']);

        }

      ?>

    </p>

    </div> <!-- /container -->





    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <script src="js/ie10-viewport-bug-workaround.js"></script>

  </body>

</html>
