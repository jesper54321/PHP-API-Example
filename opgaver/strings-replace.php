<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";
echo "<h1>Eksempel på string replace</h1>\n<hr />";

$str1 = "Til Bo Nicolajsen\n
		Vi skriver fordi der endnu er penge på din konto og den er blevet spærret. 
		Grundet vi har skiftet platform bedes du oprette din konto på ny med email 
		adressen: bo@someplace.dk - Efter oprettelse vil dine penge vente på din 
		konto hvor du enten kan bruge dem eller få dem udbetalt.\n
		Beløb tilgængeligt opgjort pr. : 21.405,52 kr.\n
		Venlig hilsen Tina";

$str2 = "Hej Tina\n
		Da jeg er ufattelig rig, og derfor ikke har brug for pengene. 
		Ser jeg gerne at i donere alle pengene til Dyrenes beskyttelse. 
		Under navnet \"GeorgGiraf\".\n\n
		Venlig hilsen Bo";

// Funktion til at sætte alt til lowercase
//echo "<hr>" . mb_strtolower($str1);
//echo "<hr>" . mb_strtoupper($str1);

// Funktion til at søge/erstatte
$str1_modified = str_replace('Bo', 'Bolette', $str1);
$str2_modified = str_replace('Tina', 'Susi', $str2);

// Tvinger linebreaks <br> ind hvor der er newlines (\n)
echo nl2br($str1_modified);

?>