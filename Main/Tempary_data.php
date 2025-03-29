<?php
session_start();
include("db.php");

$data = json_decode(file_get_contents("php://input"), true);

$filmName = $data["filmName"];
$_SESSION['data_to_retrieve'] = $filmName;

?>