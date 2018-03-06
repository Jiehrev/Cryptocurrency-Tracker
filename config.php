<?php

$user = "root";
$pass = "jiehrev21";

try {
$db = new PDO('mysql:host=localhost;dbname=cryptocurrency_tracker', $user, $pass);
}
catch (PDOException $e){
	print "Error!: " . $e->getMessage() . "</br>";
	die();
}

?>