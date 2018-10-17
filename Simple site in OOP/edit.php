<?php
$filename = $_POST['file'];
$content = file_get_contents('projects/'. $filename . ".txt");
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <form action="save.php" method="post">
    	<input type="hidden" name="file" value="<?php echo $filename;?>">
      <input type="text" name="project" value="<?php echo $content; ?>">
      <input type="submit" value="save">
    </form>
</html>