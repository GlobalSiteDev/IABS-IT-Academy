<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Game</title>
</head>
<body>
	<div>
			<?php
			session_start();
			if ($_SESSION['comp'] < 1) {
				echo "YOU WIN!";
			}
			elseif ($_SESSION['player'] < 1) {
				echo "YOU LOOSE!";
			}
			session_unset();
			?>
	<a href="game.php">Попробуйте еще раз!</a>
	</div>
</body>
</html>