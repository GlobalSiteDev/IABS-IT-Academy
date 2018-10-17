<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $text = $_POST['text'];
  $data = [$name, $email, $text];
	//Проверяю введено ли имя
	if($name =='')
  	$error[] = 'Name is required';
	//Проверяю правильность email-а
	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  	$error[] = 'Please enter a valid email address';
	//Далее если нет ошбок
	if(!isset($error)){
    $fp = fopen('users.csv', 'a');
		fprintf($fp, chr(0xEF).chr(0xBB).chr(0xBF));//для отображения кириллицы в файле
		fputcsv($fp, $data);
		fclose($fp);
  }
}
//вывожу ошибки на экран
if(isset($error)){
    foreach($error as $error)
        echo "<p style='color:#00ffff; text-align:center;'>$error</p>";
}