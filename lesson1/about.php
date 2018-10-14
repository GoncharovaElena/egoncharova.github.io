<?php 
$name = "Елена Гончарова";
$age = 21;
$email = "el-goncharova@mail.ru";
$city = "Санкт-Петербург";
$about = "Люблю театр";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>About ELena</title>
</head>
<body>
	<h1>Информация</h1>
	<ul>
		<li>Имя: <?= $name ?> </li>
		<li>Возраст: <?= $age ?></li>
		<li>Адрес электронной почты: <?= $email ?></li>
		<li>Город: <?= $city ?></li>
		<li>Кратко о себе: <?= $about ?></li>
	</ul>
</body>
</html>