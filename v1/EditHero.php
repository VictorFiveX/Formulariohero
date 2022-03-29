<?php


include("../includes/DbOperation.php");
include("../includes/DbConnect.php");





$operacao = new DbOperation();
$db = new DbConnect();


$id = $_POST["Id"];
$name =  $_POST["name"];
$realname = $_POST["realname"];
$rating = $_POST["rating"];
$teamaffiliation = $_POST["teamaffiliation"];
 

$operacao ->updateHero($name, $realname, $rating, $teamaffiliation, $id);
$db -> connect();
