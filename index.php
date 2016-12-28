<html>
<head>
	<title>Leve Checker</title>

	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,300' rel='stylesheet' type='text/css'>
	<php include 'connect.php' ?>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
	<script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
	<script type="text/javascript">
		function ClearForm(){
		    document.MyForm.reset();
		}
	</script>
	<script type="text/javascript">
		$(function() {
		    $('body').mousedown(function(e){if(e.button==1)return false});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#main').localScroll(800);
			$('#nav').localScroll(800);
			
			//.parallax(xPosition, speedFactor, outerHeight) options:
			//xPosition - Horizontal position of the element
			//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
			//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
			$('#classes').parallax("50%", 0.3);
			$('#levels').parallax("50%", 0.3);
			

		})
	</script>
</head>
<body>
<div id="sidebar">
	<div id="sb-wrap">
		<div id="logo">
			<h1>
				<a href="#">
					<img src="img/logo.png" alt="FC Logo">
				</a>
			</h1>
		</div>
		<ul id="nav">
			<li>
				<h2>
					<a href="#classes">
						<p class="menu">No wait! Wrong class!</p>
					</a>
					<!--<a href="#levels">
						<p class="menu">Different level please!</p>
					</a>-->
				</h2>
			</li>
			<footer>
				<div id="status">
					<iframe style="margin-top:-5px; margin-bottom:-5px;" width="100%" height="44" src="http://www.arrstatus.com/embed/pages/embed_49.html" frameborder="0" scrolling="no"></iframe>
				</div>
				<p id="notcopyright">Handcrafted by <a href="http://eu.finalfantasyxiv.com/lodestone/character/6703544/">Reyner Pycelle</a></p>
			</footer>
		</ul>
	</div>
</div>
<div id="quotes">
	<img src="img/quotes/nomoreleves.png" />
</div>

<?php 

	$_POST['class'];
	$_POST['level'];
	
	echo "
		<form action = 'index.php' method='POST'>
			<div id='main'>
				<div id='classes'>
					<div class='story'>
						<div class='float-left'>
							<h2 id='choose'>What are ya levelling?</h2>
							<br />
							<select name='class'>
								<optgroup label='Disciple of Hand'>
									<option value='Blacksmith'>Blacksmith</a>
									<option value='Culinarian'>Culinarian</a>
								</optgroup>
								<optgroup label='Disciple of Land'>
									<option value='Botanist'>Botanist</a>
									<option value='Miner'>Miner</a>
								</optgroup>
							</select>
							<br />
							<br />
							<a href='#levels'>Choose your level!</a>
						</div>
					</div>
				</div>
				<div id='levels'>
					<div class='story'>
						<div class='bg'></div>
							<div class='float-right'>
								<h2>Alright! What level are ye?</h2>
								<input type='radio' name='level' value='1'>Level 1 (CUL/BSM) <br />
								<input type='radio' name='level' value='10'>Level 10 (MIN) <br />
								<input type='radio' name='level' value='25'>Level 25 (BTN)
								<br />
								<br />
								<input type='submit' value='View leves'>
							</div>
					</div>
				</div>
			</div>
		</form>
	";
?>
</body>
</html>