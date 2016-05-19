<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE>Sound Art Studio</TITLE>
		<link rel="stylesheet" type="text/css" href="../stil.css">
		<script src="../Skripte/script.js"></script>
		<META charset=utf-8>
		</HEAD>
		<BODY>
			<div id="zaglavlje">
				<h1>Sound Art Studio</h1>
				<div id="logo">
					<div id="kruzic"></div>
					<div id="linija"></div>
				</div>
			</div>

			<a class="skip-main" href="GlavniDioNovosti">Preskoči čitanje menija</a>
			<div id="meni">
				<ul>
					<li><a href="#">Naslovnica</a></li>
					<li><a href="omeni.php">O meni</a></li>
					<li><a href="Coveri.php">Coveri</a></li>
					<li><a href="Cjenovnik.php">Cjenovnik</a></li>
					<li><a href="Kontakt.php">Kontakt</a></li>
					<li><a href="Login.php">Login</a></li>
				</ul>
			</div>

			<select id="izdvoji" onchange="Izdvoji()">
				<option value="sve">Sve novosti</option>
				<option value="danasnje" id="opcija1">Danasnje novosti</option>
				<option value="sedmicne" id="opcija2">Novosti ove sedmice</option>
				<option value="mjesecne" id="opcija3">Novosti ovog mjeseca</option>
			</select>
			<div class="Abc">
				<input type="checkbox" name="alphabetical" value="no" id="cb">Sortiraj abecedno<br>
			</div>
			<div class="GlavniDioNovosti" name="GlavniDioNovosti">

				<?php

				$podaci=file('../novosti.csv');

				foreach($podaci as $novost) {
					$podatak=explode('%',$novost);

					echo "<div class='Novost'>";
					echo "<div class='vrijeme'>". $podatak[0] . "</div>";
					echo "<p>". $podatak[1] . "</p>";
					echo "<label class='pomvrijeme'>". $podatak[2]. "</label>";
					echo "<img src='../Slike/sas.jpg'";
					echo "</div>";
					echo "</div>";

					}
				?>
			</div>
		</BODY>
	</HTML>
