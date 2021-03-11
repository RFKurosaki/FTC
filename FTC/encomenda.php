<?php
    include_once('conexao_encomenda.php');
	$nome = $_POST['nome'];
    $email = $_POST['email'];
	$item = $_POST['item'];
	$quantidade = $_POST['quantidade'];

	$sql = "INSERT INTO encomenda (nome, email, item, quantidade) VALUES ('$nome', '$email', '$item', '$quantidade')";
    $resultado = mysqli_query($conn, $sql);
	if ($resultado != 1){
	echo  "<script>alert('Email não enviado!);</script>";}
    mysqli_close($conn);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Mensagem enviada com sucesso</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

			<div id="wrapper">

				<header id="header">
					<div class="inner">

							<a href="index.html" class="logo">
								<span class="fa fa-car"></span> <span class="title">Erofio Atlantico</span>
							</a>

							<nav>
								<ul>
									<li><a href="#menu">Menu</a></li>
								</ul>
							</nav>

					</div>
				</header>

				<nav id="menu">
					<h2>Menu</h2>
					<ul>
						<li><a href="index.html">Home</a></li>

						<li><a href="offers.html">Resolução de problemas</a></li>

						<li><a href="solucoes.php">Forum de problemas</a></li>

						<li><a href="fleet.html">Produtos</a></li>

                        <li><a href="about.html">About Us</a></li>
					</ul>
				</nav>

					<div id="main">
						<div class="inner">
							<h1>Mensagem enviada com sucesso</h1>

							<div class="image main">
								<img src="images/erofioatlantico.jpg" class="img-fluid" alt="" />
							</div>
							<div class="page-header">

	                        </div>
						</div>
					</div>
		</div>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>