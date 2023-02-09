<menu>
        <a href="index.php">Avaleht</a>
        <a href="index.php?leht=portfoolio">Portfoolio</a>
        <a href="index.php?leht=kaart">Kaart</a>
        <a href="index.php?leht=kontakt">Kontakt</a>
</menu>

<?php
if(!empty($_GET['leht'])){
	$leht = htmlspecialchars($_GET['leht']);
	$lubatud = array('portfoolio','kaart','kontakt');
	$kontroll = in_array($leht, $lubatud);
	if($kontroll==true){
		include($leht.'.php');
	} else {
		echo 'Valitud lehte ei eksisteeri!';
	}
} else {
?>

<h2>Avaleht</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit asperiores aut tempora a perferendis nemo impedit aliquam dolorum vero molestias, ab numquam tenetur voluptatibus esse atque odit eaque delectus ipsam.</p>
<?php

        }
?>