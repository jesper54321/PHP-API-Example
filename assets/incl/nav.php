<?php 
$arrNavItems = [
    'home' => ['Forside','/'],
    'about' => ['Om','/about.php'],
    'contact' => ['Kontakt os','/contact.php'],
];

?>
<nav>
	<ul>
		<?php	
			foreach($arrNavItems as $key => $value) {
				echo "<li><a href=\"$value[1]\">$value[0]</a></li>\n";
			}
		?>
	</ul>
</nav>