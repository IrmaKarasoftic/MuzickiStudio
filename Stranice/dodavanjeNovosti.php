<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE>Dodavanje novosti</TITLE>
		<link rel="stylesheet" type="text/css" href="../stil.css">
		<script src="Skripte/novosti.js"></script>
		<META charset=utf-8>
		</HEAD>
		<BODY>

			<?php
			$naziv="";
			$tekst="";
			$datum = date("D M d");
			if (isset($_POST['DodajButton']) && !empty($_POST['nazivVijesti']) && !empty($_POST['tekstVijesti'])) 
			{
				$naziv = $_POST['nazivVijesti'];
				$tekst = $_POST['tekstVijesti'];
			}
			$upis=fopen("novosti.csv", "a");
			$podaciZaUpisati = $naziv . "-!!!###-" . $tekst . "-!!!###-" . $datum;

			fwrite($upis, $podaciZaUpisati);
			fclose($upis);
			?>
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
					<li><a href="index.php">Naslovnica</a></li>
					<li><a href="omeni.php">O meni</a></li>
					<li><a href="Coveri.php">Coveri</a></li>
					<li><a href="Cjenovnik.php">Cjenovnik</a></li>
					<li><a href="Kontakt.php">Kontakt</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			<form action="dodavanjeNovosti.php" class="dodavanje" method="post">
				<div class="Dodaj">
					<h1>Unesi novu vijest</h1>
					<input type="text" id="nazivVijesti" name="nazivVijesti" value="" placeholder="Naziv vijesti" required />
					<textarea cols="40" id="tekstVijesti" name="tekstVijesti" rows="5" placeholder="Tekst vijesti" required></textarea> 
					<div id="wrapper">
					<input type="text" id="drzava" name="drzava" value="" placeholder="Dvoslovni kod države" required />
					<input type="text" id="broj" name="broj" value="" placeholder="Broj telefona" required />
					</div>
					<button type="submit" class="DodajButton" name="DodajButton">Dodaj</button>
				</div>
			</form>
		</BODY>
	</HTML>
