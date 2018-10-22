<?php
$json = file_get_contents(__DIR__ . '/contacts.json');
$contacts = json_decode($json, true);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Контакты</title>
</head>
<body>
	
<table>
	<tr>
		<td>Номер</td>
		<td>Имя</td>
		<td>Фамилия</td>
		<td>Адрес</td>
		<td>Номер телефона</td>
	</tr>
	<?php foreach ($contacts as $i => $contact) : ?>
	<tr>
		<td><?php echo $i+1 ?></td>
		<td><?php echo $contact['firstName']?></td>
		<td><?php echo $contact['lastName']?></td>
		<td><?php echo $contact['adress']?></td>
		<td><?php echo $contact['phoneNumber']?></td>
	</tr>
<?php endforeach; ?>
</table>

</body>
</html>