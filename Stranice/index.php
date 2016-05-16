<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE>Sound Art Studio</TITLE>
		<link rel="stylesheet" type="text/css" href="../stil.css">
		<script src="Skripte/script.js"></script>
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

				<div class="Red">
					<div class="Novost" alt="Novost">
						<div class="vrijeme">April 2, 2016 21:02:59</div>
						<p>Objavljena je obrada pjesme
							<a href="https://www.youtube.com/watch?v=En7SDhn48Us&feature=share" target=_blank>Zemljo moja</a> (Latif Moćević). Aranžman: Halid Hajduković.<br></p>
							<label class="pomvrijeme">April 2, 2016 11:11:59</label>
							<img src="../Slike/sas.jpg" alt="Logo">
						</div>


						<div class="Novost" alt="Novost">
							<div class="vrijeme">April 2, 2016 7:11:59</div>
							<p>Objavljen je cover pjesme
								<a href="https://www.youtube.com/watch?v=BHxn53COWbY" target=_blank>Run</a> (Irma Karasoftić). Aranžman: Halid Hajduković.<br></p>
								<label class="pomvrijeme">April 2, 2016 7:11:59</label>
								<img src="../Slike/sas.jpg" alt="Logo">
							</div>
						</div>

						<div class="Red">
							<div class="Novost" alt="Novost">
								<div class="vrijeme">March 31, 2016 17:16:00</div>
								<p>Objavljen je cover pjesme
									<a href="https://www.youtube.com/watch?v=MeCjl_ZLjsE" target=_blank>Pesma o nama</a> (Irma Karasoftić). Aranžman: Halid Hajduković.<br></p>
								<label class="pomvrijeme">March 31, 2016 17:16:00</label>
								<img src="../Slike/sas.jpg" alt="Logo">
							</div>

							<div class="Novost" alt="Novost">
								<div class="vrijeme">March 27, 2016 17:16:00</div>
								<p>Objavljena je obrada pjesme
									<a href="https://www.youtube.com/watch?v=Q_d055QmLpY" target=_blank>Eh da je tuga snijeg</a> (Infinity). Aranžman: Halid Hajduković.<br></p>
									<label class="pomvrijeme">March 30, 2016 17:16:00</label>
									<img src="../Slike/sas.jpg" alt="Logo">
								</div>
							</div>

							<div class="Red">
								<div class="Novost" alt="Novost">
									<div class="vrijeme">March 20, 2016 17:16:00</div>
									<p>Objavljen je cover pjesme
										<a href="https://www.youtube.com/watch?v=apfh3TMcP-s" target=_blank>Prijatelj pravi</a> (Halid Hajduković).<br></p>
										<label class="pomvrijeme">March 20, 2016 17:16:00</label>
										<img src="../Slike/sas.jpg" alt="Logo">
									</div>

									<div class="Novost" alt="Novost">
										<div class="vrijeme">March 4, 2016 17:16:00</div>
										<p>Halid i Ena M. <a href="https://www.youtube.com/watch?v=fAWFKCzF5Ms" target=_blank><br>Koncert u Jelićevoj</a>.<br></p>
											<div class="pomvrijeme">March 4, 2016 17:16:00</div>
											<img src="../Slike/sas.jpg" alt="Logo">
										</div>
									</div>

									<div class="Red">
										<div class="Novost" alt="Novost">
											<div class="vrijeme">January 27, 2016 17:16:00</div>
											<p>Objavljen je
												<a href="https://www.youtube.com/watch?v=4T0aihri5Vk" target=_blank>snimak nastupa</a> <br>(Irina Kapetanović).<br></p>
												<label class="pomvrijeme">January 27, 2016 17:16:00</label>
												<img src="../Slike/sas.jpg" alt="Logo">
											</div>

											<div class="Novost" alt="Novost">
												<div class="vrijeme">January 20, 2016 17:16:00</div>
												<p>Objavljen je cover pjesme
													<a href="https://www.youtube.com/watch?v=AUHTJCqNx6s" target=_blank>Eh da ja tuga snijeg</a> (Erna H. i Almina K.). Aranžman: Halid Hajduković.<br></p>
													<label class="pomvrijeme">January 20, 2016 17:16:00</label>
													<img src="../Slike/sas.jpg" alt="Logo">
												</div>
											</div>

											<div class="Red">
												<div class="Novost" alt="Novost">
													<div class="vrijeme">December 5, 2015 17:16:00</div>
													<p>Objavljena je obrada pjesme
														<a href="https://www.youtube.com/watch?v=W-XrlBVO10k" target=_blank>Secret of the lake</a> Aranžman: Halid Hajduković.<br></p>
														<label class="pomvrijeme">December 5, 2015 17:16:00</label>
														<img src="../Slike/sas.jpg" alt="Logo">
													</div>

													<div class="Novost" alt="Novost">
														<div class="vrijeme">December 1, 2015 17:16:00</div>
														<p>Objavljena je obrada pjesme
															<a href="https://www.youtube.com/watch?v=LNWnGap3Rws" target=_blank>Good Time</a> Aranžman: Halid Hajduković.<br></p>
															<label class="pomvrijeme">December 1, 2015 17:16:00</label>
															<img src="../Slike/sas.jpg" alt="Logo">
														</div>
													</div>
													

												</div>
											</BODY>
										</HTML>
