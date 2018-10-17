<?php
$filename = $_POST['file'];
$content = $_POST['project'];
file_put_contents('projects/'. $filename, $content);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<p>Успех!</p>
<a href="index.php">Вернуться</a>
</body>
</html>