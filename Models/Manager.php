<?php

function getCn(){
	static $cn;
	if(!$cn) $cn= new PDO("mysql:host=localhost;dbname=smi22", "root", "");
	return $cn;
}



// function getListe(){
// 	return getCn()->query("select * from onp")->fetchAll();
// }

function getONP(){
	return getCn()->query("select * from onp")->fetchAll();
}



function user_exists(array $user){
	
	/*
	$user=[$t["Login"],sha1($_POST["PW"])];
	$Rq= getCn()->prepare ("select count(*) from User where login = ? and PW = ?");
	$Rq->execute($user);
	return $Rq->fetchColumn();
	*/
	
	/*$pwHash= password_hash('douz',PASSWORD_DEFAULT);
	  getCn()->exec("insert into user values('moi2','$pwHash')");
	*/
	
	if(isset($user["Login"])){/////////////
		
		return true;
	}        ////////////////ps thats mine just for testing

	// $Rq= getCn()->prepare ("select PW from User where login = ? ");	
	// $Rq->execute([$user["Login"]]);
	// $passHash= $Rq->fetchColumn();
	// return password_verify($user["PW"],$passHash) ;n
	
	
}

