<?php 

$animals = array(
	'America' => array('Procyon', 'Mephitidae', 'Canis Iatrans'),
	'Europa' => array('Sciurus', 'Cervus elaphus', 'Ursus arctos', 'Capra ibex'),
	'Asia' => array('Elephas maximus', 'Ailuropoda melanoleuca', 'Camelus bactrianus', 'Panthera'),
	'Antarctida' => array('Balaenidae', 'Callorhinus ursinus', 'Hydrurga leptonyx', 'Spheniscidae'),
	'Oceania' => array('Tachyglossus aculeatus', 'Macropus', 'Phascolarctos cinereus', 'Vulpes'),
	'Africa' => array('Syncerus caffer','Poelagus marjorita', 'Hippopotamus amphibius', 'Loxodonta')
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Задание 2 животные</title>
</head>
<body>
	
<h2>Названия, состоящие из двух слов</h2>

<?php foreach($animals as $key => $value) {
	$continent = $key;
	foreach($value as $animaltype) {
	$firstword = strstr($animaltype, ' ', true);
	$secondword = strstr($animaltype, ' ');

	echo $twowords = $firstword . $secondword;
	echo PHP_EOL;
	}
}

?>

</body>
</html>
