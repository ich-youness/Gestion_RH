<?php 

try{
	session_start();	
	include ("Controllers/Controller.php");
	
	if(empty($_SESSION["Login"])) {login(); exit();}
	
	$action = isset($_GET["action"])?$_GET["action"]:"index";

	if (is_callable($action))
		$action();
	else throw New  Exception ("Action non prise en charge");
		

		
}
catch(Exception $e) {
	
	$view= "Views/vError.php";
	$variables=["message"=> $e->getMessage()];
	render($view, $variables);
	

}
