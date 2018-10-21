<?php
// carrega arquivo de configuração
require_once('../config/config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>UNC - Vivência no Contact Center</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/fontawesome-all.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> <!-- fonte para a pagina -->

	<style type="text/css">
			body {
				padding-top: 140px;
    			padding-bottom: 140px;
    			background-color: #f5f8fa;
			}

			.form-login {
				width: 100%;
				max-width: 300px;
				padding: 20px;
				margin: auto;
			}
	</style>
<body>

	<h1 class="text-center">UNC</h1>

	<form class="form-login" method="get">
		<div class="form-group">
			<label>Usuário</label>
			<input class="form-control" type="text" name="usuario">	
		</div>
		<div class="form-group">
			<label>Senha</label>
			<input class="form-control" type="password" name="senha">			
		</div>
		<button class="btn btn-primary col">Entrar</button>
	</form>

 	<script src="../assets/js/jquery.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>