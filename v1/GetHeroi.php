<?php


include("../includes/DbOperation.php");
include("../includes/DbConnect.php");


$operacao = new DbOperation();
$db = new DbConnect();


$operacao ->getHeroes();
$db -> connect();
