<?php

session_start();

$basehp = 10;
$damage = rand(1, 4);

	if (!isset($_SESSION['player'])){
		$_SESSION['player'] = $basehp;
		$_SESSION['comp'] = $basehp;
	}
	if (!empty($_POST['number'])){
		$number = (int)$_POST['number'];
		if ($number > 3)
			echo 'Число должно быть от 1 до 3!';
		elseif($number > 0 && $number < 4){
			if (rand(1, 3) == $number){
				$_SESSION['player'] = $_SESSION['player'] - $damage;
				echo 'По вам попали';
				echo " У вас осталось {$_SESSION['player']} hp<br>";
			}else{
				$_SESSION['comp'] = $_SESSION['comp'] - $damage;
				echo 'Вы попали!';
				echo " У противника осталось {$_SESSION['comp']} hp<br>";
			}
		}
	}
	else
		echo "Введите число!<br>";
	
	echo "Ваше hp {$_SESSION['player']}<br>";
	echo "hp противника {$_SESSION['comp']}<br>";
	
	if ($_SESSION['comp'] < 1 || $_SESSION['player'] < 1){
		header("Location: gameover.php");
	}

?>
<form method = "post">
	<input type = "text" name = "number">
	<input type = "submit">
</form>
