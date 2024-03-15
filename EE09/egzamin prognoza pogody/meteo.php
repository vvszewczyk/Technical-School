<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styl4.css">
	<title>Prognoza pogody Poznań</title>
</head>

<body>
	<header>
		<section id="h1">
			<p>maj, 2019 r.</p>
		</section>
		<section id="h2">
			<h2>Prognoza dla Poznania</h2>
		</section>
		<section id="h3">
			<img src="logo.png" alt="prognoza">
		</section>	
	</header>

	<main>
		<section id="lewy">
			<a href="kwerendy.txt" download>Kwerendy</a>
		</section>
		<section id="prawy">
			<img src="obraz.jpg" alt="Polska, Poznań">
		</section>
	</main>
	<article>
		<table>
			<tr>
				<th>Lp.</th>
				<th>DATA</th>
				<th>NOC - TEMPERATURA</th>
				<th>DZIEŃ - TEMPERATURA</th>
				<th>OPADY [mm/h]</th>
				<th>CIŚNIENIE [hPa]</th>
			</tr>
			<?php
				$baza = @mysqli_connect("localhost", "root", "", "prognoza");
				$zap = "SELECT * FROM pogoda WHERE miasta_id=2 ORDER BY data_prognozy DESC";
				$wynik = mysqli_query($baza, $zap);
				while ($row = mysqli_fetch_array($wynik))
				{
					echo "<tr>";
					echo "<td>".$row["id"]."</td>";
					echo "<td>".$row["data_prognozy"]."</td>";
					echo "<td>".$row["temperatura_noc"]."</td>";
					echo "<td>".$row["temperatura_dzien"]."</td>";
					echo "<td>".$row["opady"]."</td>";
					echo "<td>".$row["cisnienie"]."</td>";
					echo "</tr>";
				}
				mysqli_close($baza);
			?>
		</table>
	</article>
	<footer>
		<p>Stronę wykonał: 00000000000</p>
	</footer>
</body>
</html>