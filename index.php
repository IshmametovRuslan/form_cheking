<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
	      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="script.js"></script>
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
<form action="" class="needs-validation" novalidate>
	<div class="form-row register_user">
		<legend><p>Форма регистрации спортсмена</p></legend>
		<div class="form-group col-6">
			<label for="first-name"><h5>Имя*</h5></label>
			<input type="text" class="form-control" data-validation="length alphanumeric" data-validation-length="min1" data-validation-error-msg="Вы не ввели ваше имя" id="validationCustomUsername"  placeholder="Введите ваше имя">
		</div>
		<div class="form-group col-6">
			<label for="last-name"><h5>Фамилия*</h5></label>
			<input type="text" data-validation="length alphanumeric" data-validation-length="min1" data-validation-error-msg="Вы не ввели вашу фамилию" class="form-control" id="formGroupExampleInput" placeholder="Введите вашу фамилию">
		</div>
		<div class="form-group col-6">
			<label for="email"><h5>Email адрес*</h5></label>
			<input type="email" class="form-control" data-validation="email" data-validation-error-msg="Введите корректный email" id="email" aria-describedby="emailHelp" placeholder="Введите email">
		</div>
		<div class="form-group col-6">
			<label for="age"><h5>Возраст*</h5></label>
			<input type="number" data-validation="number" data-validation-error-msg="Вы забыли указать ваш возраст" class="form-control" min="1" max="99" id="age" placeholder="Укажите возраст">
		</div>
		<div class="form-group col-6">
			<label for="sex"><h5>Пол*</h5></label>
			<select name="sex" id="sex" data-validation="required" data-validation-error-msg="Вы забыли указать ваш пол" class="custom-select my-1 mr-sm-2">
				<option value="">Выберите пол</option>
				<option value="1">Женский</option>
				<option value="2">Мужской</option>
			</select>
		</div>
		<div class="form-group col-6">
			<label for="city"><h5>Город проживания*</h5></label>
			<select name="city" id="city" class="custom-select my-1 mr-sm-2" data-validation-error-msg="Вы забыли указать ваш город проживания" data-validation="required">
				<option value="">Выберите город</option>
				<option value="Moscow">Москва</option>
				<option value="Saint-Petersburg">Санкт-Петербург</option>
				<option value="Vladivostok">Владивосток</option>
				<option value="Kazan">Казань</option>
			</select>
		</div>
		<div class="passport form-group col-6">
			<label for="passport"><h5>Паспортные данные*</h5></label>
			<input type="text" id="passport" class="form-control" placeholder="Укажите серию и номер паспорта">
		</div>
		<div class="option-race form-group col-6">
			<label for="option-race"><h5>Вариант забега*</h5></label>
			<div class="custom-control custom-radio">
				<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" value="online">
				<label class="custom-control-label" for="customRadio1">Пробегу online</label>
			</div>
			<div class="custom-control custom-radio">
				<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="in-place">
				<label class="custom-control-label" for="customRadio2">Приеду на место события</label>
			</div>
		</div>
		<div class="gps form-group row justify-content-center">
			<label for="gps"><p>Для участия online необходимо установить приложение Strava и зарегестрироваться в
					нем</p></label>
			<button type="button" class="btn btn-primary">Установить</button>
		</div>
		<div class="row justify-content-center">
			<button type="submit" class="btn btn-primary">Отправить</button>
		</div>
	</div>

</form>
</body>
</html>