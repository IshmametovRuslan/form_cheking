<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
<form action="" class="register_user">
	<fieldset>
		<legend>Форма регистрации спортсмена</legend>
		<div class="first_name">
			<label for="first_name">Имя</label>
			<input type="text" id="first_name">
		</div>
		<div class="last_name">
			<label for="last_name">Фамилия</label>
			<input type="text" id="last_name">
		</div>
		<div class="email">
			<label for="email">E-mail</label>
			<input type="text" id="email">
		</div>
		<div class="sex">
			<label for="sex">Пол</label>
			<select name="sex" id="sex">
				<option value="default">Выберите пол</option>
				<option value="1">Женский</option>
				<option value="2">Мужской</option>
			</select>
		</div>
		<div class="city">
			<label for="city">Город проживания</label>
			<select name="city" id="city">
				<option value="default">Выберите город</option>
				<option value="Moscow">Москва</option>
				<option value="Saint-Petersburg">Санкт-Петербург</option>
				<option value="Vladivostok">Владивосток</option>
				<option value="Kazan">Казань</option>
			</select>
		</div>
	</fieldset>
</form>
</body>
</html>