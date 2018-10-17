<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Padauk:400,700" rel="stylesheet">
    <title>Projects</title>
  </head>
  <header>
    <!--<div class="UAH">USD/UAH:<?php include 'Exchange_Rate.php';?></div>-->
  </header>
  <body>
    <h1>Add project</h1>
    <form action="create.php" method="post" id="form">
      <input name="projectname" type="text" placeholder="Project name">
      <input name="description" type="text" placeholder="Description">
      <input name="price" type="number" placeholder="Budget">
      <input name="deadline" type="date">
      <input type="submit" value="create" id="cbutton">
    </form>
  </body>
 </html>