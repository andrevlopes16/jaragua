<?php 

require_once("vendor/autoload.php");
use CoffeeCode\DataLayer\Connect;

$app = new \Slim\Slim();

$app->config('debug', true);



$app->get('/', function(){

$conn = Connect::getInstance();
$error = Connect::getError();
	

	if ($error) {

		echo $error->getMessage();
		die();

	}

	$query = $conn->query("SELECT * FROM usuarios_restrito");
	var_dump($query->fetchAll());

	
});

$app->run();



 ?>
