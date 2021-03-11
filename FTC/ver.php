
<!DOCTYPE HTML>
<html>
	<head>
		<title>Ver</title>
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
					</div>
				</header>



					<div id="main">
						<div class="inner">
                        <div class="image main">
								<img src="images/erofioatlantico.jpg" class="img-fluid" alt=""/>
							</div>
                            
                        <?php
include_once('conexao.php');
$sql = "SELECT id, nome, email, objeto, observacoes FROM ftc WHERE id = ".$_GET['id'];
$resultado = mysqli_query($conn, $sql);
if($sql === FALSE) { 
    die(mysqli_error());
 }
while($rows_cursos = mysqli_fetch_assoc($resultado)){ ?>
    <tr>
        <td><h3><?php echo $rows_cursos['nome']; ?></h3></td>
        <td><h3><?php echo $rows_cursos['email']; ?></h3></td>
        <td><h3><?php echo $rows_cursos['objeto']; ?></h3></td>
        <td><h3><?php echo $rows_cursos['observacoes']; ?></h3></td>
    </tr>
<?php }
mysqli_close($conn);
?>

                        </div>
					</div>

				<footer id="footer">
                <div class="inner">
						<section>
							<h2>Contact Us</h2>
							<form method="post" action="#">
								<div class="fields">
									<div class="field half">
										<input type="text" name="name" id="name" placeholder="Name" />
									</div>

									<div class="field half">
										<input type="text" name="email" id="email" placeholder="Email" />
									</div>

									<div class="field">
										<input type="text" name="subject" id="subject" placeholder="subject" />
									</div>

									<div class="field">
										<textarea name="message" id="message" rows="3" placeholder="Notes"></textarea>
									</div>

									<div class="field text-right">
										<label>&nbsp;</label>

										<ul class="actions">
											<li><input type="submit" value="Enviar Mensagem" class="primary" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>
						<section>
							<h2>Contacte-nos</h2>

							<ul class="alt">
								<li><span class="fa fa-envelope-o"></span> <a href="#">geral@erofio.pt</a></li>
								<li><span class="fa fa-phone"></span> (+351) 244 770 940 </li>
								<li><span class="fa fa-map-pin"></span> Rua do Pinhal, n.º 200, Jardoeira, 2440 - 373 BATALHA / LEIRIA / PORTUGAL</li>
							</ul>
						</section>

						<ul class="copyright">
							<li>Copyright © 2020 Company Name </li>
						</ul>
					</div>
					
				</footer>

		</div>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>