<?php

function connectToDb()
{
	try {

		return new PDO('mysql:host=localhost;dbname=mytodo','root','P@$$w0rd');
		
	} catch (Exception $e) {

		die($e->getmessage());
		
	}	
}
function fetchAllTasks($pdo)
{
	$statment = $pdo->prepare('select * from todo');
	$statment->execute();
	return  $statment->fetchAll(PDO::FETCH_CLASS,'Task');

	
}

function dd($data){

	echo("<pre>");
	die(var_dump($data));
	echo('</pre>');

}