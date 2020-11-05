<!DOCTYPE html>
<html>
<title>MINAS VALLEY</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" type="text/css" href="../styles/signup.css">    

<header>
</header>

<body>



<div class="container" id="container">
	<div class="form-container sign-in-container">
		<form action="../back-end/signup.php" method="post">
			<h1>Criar conta</h1>
			<input type="text" name="nome" placeholder="Nome">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="usuario" placeholder="Nome de usuario">
            <input type="password" name="senha" placeholder="Senha">
            <input type="password" name="senhaconf" placeholder="Confirma sua sennha">
			<button type="submit" name="criar">Criar conta</button><br>
			<?php 

				if(isset($_GET["error"])){
					if($_GET["error"] == "inputvazio"){

						echo "<p>Preencha todos os campos corretamente.</P>";
					}else if($_GET["error"] == "usuarioinvalido"){

						echo "<p>Usuario invalido.</P>";
					}else if($_GET["error"] == "emailinvalido"){

						echo "<p>Email invalido.</P>";
					}else if($_GET["error"] == "senhanaobate"){

						echo "<p>As senhas não coincidem.</P>";
					}else if($_GET["error"] == "usuariojaexiste"){

						echo "<p>O nome de usuario ja existe.</P>";
					}else if($_GET["error"] == "stmtfalhou"){

						echo "<p>Alguma coisa deu errado, tente novamente.</P>";
					}

				}

		?>
		</form>
	</div>
	<div class="form-container sign-up-container">
		<form action="../back-end/login.php" method="post">
			<h1>Fazer login</h1>
			<input type="email" name="nome" placeholder="Email / Usuario">
			<input type="password" name="senha" placeholder="Senha">
			<button type="submit" name="logar">Logar</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
                <h1>Não tem uma conta?</h1>
                <p>Junte-se a nós nessa jornada</p>
				<button class="ghost" id="signIn">Criar conta</button><br>
				<p>Voltar a pagina inicial</p>
				<a href="../../index.php"><img src="../../img/voltar.png" alt="Voltar"></a>
			</div>
			<div class="overlay-panel overlay-right">
                <h1>Ja é parceiro?</h1>
				<p>Conecte-se com sua conta e desfrute de nosso site</p>
				<button class="ghost" id="signUp">Logar</button>
				<p>Voltar a pagina inicial</p>
				<a href="../../index.php"><img src="../../img/voltar2.png" alt="Voltar"></a>
			</div>
		</div>
	</div>
</div>

<script src="../scripts/login.js"></script>