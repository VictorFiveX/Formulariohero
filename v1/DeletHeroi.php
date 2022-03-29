<?php


include("../includes/DbOperation.php");
include("../includes/DbConnect.php");


$operacao = new DbOperation();
$db = new DbConnect();


$id = $_POST["Id"];

$operacao ->deleteHero($id);
$db -> connect();
