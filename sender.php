<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php

			error_reporting(E_ALL);
			ini_set('display_errors', TRUE);
			

?>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="UTF-8">
    <title>B&B Il Vicoletto</title>
<link rel="icon" href="favicon.ico" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
	


	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/styleFormContatti.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$('.menu-toggle').on("click", function(){
					$('nav ul').toggleClass('showing');
				})
			})
		</script>
  		<script type="text/javascript">
			$(window).on('scroll', function() {
				if($(window).scrollTop()){
					$('nav').addClass('black');
				}else{
					$('nav').removeClass('black');
				}
			})
		</script>
	
	</head>

	<body>
		<div class="wrapper">
			<section class="seccont">
			<nav>
				<div class="logo"></div>
				<div class="menu-toggle"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></div>
				<ul>
						<li><a href="index.html" >Home</a></li>
						<li><a href="indicazioni.html">Indicazioni</a></li>
						<li><a href="dintorni.html">Dintorni</a></li>
						<li><a href="camere.html">Camere</a></li>
						<li><a href="contatti.html"class="active">Contattaci</a></li>
					</ul>
			</nav>
			</section>
  		<section class="content">

			<?php

			// Genera un boundary
			$mail_boundary = "=_NextPart_" . md5(uniqid(time()));
			 
			$to = "bbilvicoletto@gmail.com";
			$subject = "E-mail da sito";
			$sender = $_POST["cd-email"];
			$name_sender= $_POST["cd-name"];

			 
			$headers = "Da: $sender\n";
			$headers .= "MIME-Version: 1.0\n";
			$headers .= "Content-Type: multipart/alternative;\n\tboundary=\"$mail_boundary\"\n";
			$headers .= "X-Mailer: PHP " . phpversion();
			 
			// Corpi del messaggio nei due formati testo e HTML
			$text_msg = "messaggio in formato testo";
			$html_msg = "<b>messaggio</b> in formato <p><a href='http://www.aruba.it'>html</a><br><img src=\"http://hosting.aruba.it/image_top/top_01.gif\" border=\"0\"></p>";
			 
			// Costruisci il corpo del messaggio da inviare
			$msg = "This is a multi-part message in MIME format.\n\n";
			$msg .= "--$mail_boundary\n";
			$msg .= "Content-Type: text/plain; charset=\"iso-8859-1\"\n";
			$msg .= "Content-Transfer-Encoding: 8bit\n\n";
			$msg .= $_POST["cd-textarea"];  // aggiungi il messaggio in formato text
			 
			$msg .= "\n--$mail_boundary\n";
			$msg .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
			$msg .= "Content-Transfer-Encoding: 8bit\n\n";
			$msg .= $_POST["cd-textarea"];  // aggiungi il messaggio in formato HTML
			 
			// Boundary di terminazione multipart/alternative
			$msg .= "\n--$mail_boundary--\n";
			 
			// Imposta il Return-Path (funziona solo su hosting Windows)
			ini_set("sendmail_from", $sender);
			 
			// Invia il messaggio, il quinto parametro "-f$sender" imposta il Return-Path su hosting Linux
			if (mail($to, $subject, $msg, $headers, "-f$sender")) { 
			    ?><p class="title">Email Inviata Correttamente</p>
					<p>Verrai contattato il più presto possibile</p>
			    <? 
			} else { 
			   ?><p class="title">Email NON Inviata Correttamente</p>
					<p>Pare che ci sia una complicazione</p><p> ti invitiamo a a riprovare più tardi</p><?
			}

			?>
		</section>
					<footer class="footer-distributed">

						<div class="footer-left">
							
							<h3><img src="img/Logo terra jonica.png" style="width: 130px; height: 130px; max-width:100%;height:auto; margin-bottom: 0px;" ></h3>
							<p class="footer-company-name" style="margin-left: 16%;">Terra Jonica s.r.l.s. &copy; 2018</p>
						<p class="footer-links">
						<a href="index.html">Home</a>
						·
						<a href="indicazioni.html">Indicazioni</a>
						·
						<a href="camere.html">Camere</a>
						·
						<a href="dintorni.html">Dintorni</a>
						·
						<a href="contatti.html">Contattaci</a>
					</p>
							
						</div>

						<div class="footer-center">

							<div>
								<i class="fa fa-map-marker"></i>
								<p><span>Via Goriza, 10</span> Pulsano, Italy</p>
							</div>

							<div>
								<i class="fa fa-phone"></i>
								<p>+39 349 417 2452</p>
							</div>

							<div>
								<i class="fa fa-envelope"></i>
								<p><a href=contatti.html>info@ilvicolettobb.it</a></p>
							</div>

						</div>

						<div class="footer-right">

							<p class="footer-company-about">
								<span>Sul B&B</span>
								A pochi passi dallo splendido mare, nel tratto più bello dello Jonio caratterizzato da deliziose calette di sabbia finissima, lunghe spiagge e scogliere sorge, nel cuore del centro storico di Pulsano, il <strong>B&B Il Vicoletto</strong>.
							</p>

							
							<div class="footer-icons">

								<a href="index.html" ><img src="img/Italy.png"></a>
								<a href="multi/en/home.html"><img src="img/United-Kingdom.png"></i></a>
								<a href="multi/fr/home.html"><img src="img/France.png"></a>
								<a href="multi/esp/home.html"><img src="img/Spain.png"></a>
								<a href="multi/de/home.html"><img src="img/Germany.png"></a>
							</div>


						</div>

					</footer>
			</div>
		</div>
	</div>
	    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

	        <script src="js/index.js"></script>
	        <script src="js/jquery-2.1.1.js"></script>
					<script src="js/main.js"></script> <!-- Resource jQuery -->
	    
	    
	    
  </body>
</html>