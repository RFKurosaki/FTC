<?php
    include_once('conexao.php');
	if(!empty($_POST)){
	$nome = $_POST['nome'];
    $email = $_POST['email'];
	$objeto = $_POST['objeto'];
	$observacoes = $_POST['observacoes'];

	$sql = "INSERT INTO ftc (nome, email, objeto, observacoes) VALUES ('$nome', '$email', '$objeto', '$observacoes')";
    $resultado = mysqli_query($conn, $sql);
	if ($resultado != 1){
	echo  "<script>alert('Email não enviado!);</script>";}
    }
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Forum de problemas</title>
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
							<h1>Forum de problemas</h1>

							<div class="image main">
								<img src="images/erofioatlantico.jpg" class="img-fluid" alt="" />
							</div>
                            <table>
							<?php 
							
							$sql="select id, nome, email, objeto, observacoes from ftc";
							$resultado = mysqli_query($conn, $sql);
							if($sql === FALSE) { 
								die(mysqli_error());
							 }
							while($rows_cursos = mysqli_fetch_assoc($resultado)){ ?>
								<tr>
									<td><?php echo $rows_cursos['nome']; ?></td>
									<td><?php echo $rows_cursos['email']; ?></td>
                                    <td><?php echo $rows_cursos['objeto']; ?></td>
									<td><?php echo $rows_cursos['observacoes']; ?></td>
									<td>
										<button type="button" class="btn btn-xs btn-primary"><a href="ver.php?id=<?php echo $rows_cursos['id']?>">Visulizar</a></button>
								    </td>
								</tr>
							<?php }
							mysqli_close($conn); ?>
							</table>
							
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
			<script src="js/bootstrap.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	</body>
</html>