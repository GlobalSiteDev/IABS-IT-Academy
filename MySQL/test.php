<?php
$user = "root";
$pass = "2432127";
/*
$pdo = new PDO('mysql:host=localhost;dbname=nk2', $user, $pass);
//$pdo->query("SET NAMES 'utf8'");
$sth = $pdo->prepare("SELECT * FROM articles");
$sth->execute();
$result = $sth->fetchAll();
var_dump($result);
*/
$sth = $pdo->prepare("SELECT * FROM articles WHERE id = 1");
$sth->execute();
$result = $sth->fetch();
var_dump($result);