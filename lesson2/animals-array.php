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

	$twowords = $firstword . $secondword;
	$twowords_array[] = $twowords;
	$twowords_array_filtred = array_filter($twowords_array);
	$twowords_array_final = array_values($twowords_array_filtred);
	}
}

foreach($twowords_array_final as $value){
	echo $value . '; ';
}

?>

<h2>Фантазийные названия</h2>

<?php

foreach($twowords_array_final as $value) {
	$firstpart[] = strstr($value, ' ', true);
	$secondpart[] = strstr($value, ' ');
}

shuffle($firstpart);
shuffle($secondpart);

$fantasy_animals = array();

$fantasy_animals = array_merge($firstpart, $secondpart);

foreach($fantasy_animals as $value){
	echo $value . '; ';
}

?>

</body>
</html>
