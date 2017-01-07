<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
    $compani=$_POST['compani'];
//удаляем пробелы до и после
	$name = trim($name);
	$email = trim($email);
	$phone = trim($phone);
    $compani = trim($compani);

	if ($name=='' or $email=='' or $phone=='' or $compani=='') {
		echo 'Заполните поля';
	}
	else {
		//если правильно - отправляю себе емейл с его контактами
		$mes = $name.'<br>'.$email.'<br>'.$phone.'<br>'.$compani;
		$res = mail('vika3396@gmail.com', 'письмо с сайта', $mes);
		//true - отправлено
		//false - ошибка
		if($res) {
			echo 'Форма відправлена!';
		}
		else {
			echo 'Відправте форму ще!';
		}
	}
?>