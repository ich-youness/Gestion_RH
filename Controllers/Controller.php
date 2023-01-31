<?php
include("Models/Manager.php");

function index() {
	if($_SESSION["Login"] =="1424"){
		$view="Views/vIndex.php";
	}
	else{ $view= "Views/vIndexemp.php" ; }
	
	$variables=[];	
	render($view, $variables);
}

// function liste() {
// 	$view= "Views/vListe.php"; 	
// 	$variables = ["info"=>getONP()];
// 	render($view, $variables);
// }
function conge(){
	$view = "Views/vCong.php";
	$variables = [];
	render($view, $variables);
}
function sold_cng(){
	$view = "Views/sold-cng.php";
	$variables = [];
	render($view, $variables);
}

// function Gcg(){
// 	$view = "Views/Gcg.php";
// 	$variables=[];
// 	render($view, $variables);
// }
// function Gf(){
// 	$view = "Views/Gf.php";
// 	$variables=[];
// 	render($view, $variables);
// }
function profile(){
	$view = "Views/profile.php";
	$variables=[];
	render($view, $variables);
}
function Doc(){
	$view = "Views/doc.php";
	$variables=[];
	render($view, $variables);
}
function form(){
	$view = "Views/form1.php";
	$variables=[];
	render($view, $variables);
}
function demandemuta(){
	$view = "Views/form2.php";
	$variables=[];
	render($view, $variables);
}
function pdf1(){
	// $user =["Login"=>"","PW"=>""];
	
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		
		$form =	$_POST;
		
		if(empty($form["nom"]) || empty($form["prenom"]) || empty($form["matricule"]) ||empty($form["grade"]) || empty($form["echelle"]) || empty($form["echelon"]) || empty($form["tele"]) || empty($form["diplome"]) || empty($form["etablissement"]) )  $erreur["a"] ="remplissez tous les champs!";
		// elseif(empty($form["prenom"]))  $erreur["prenom"] ="remplissez tous les champs!"   ;		
		// elseif(empty($form["matricule"]))  $erreur["matricule"] ="remplissez tous les champs!"   ;
		// elseif(empty($form["grade"]))  $erreur["grade"] ="remplissez tous les champs!"   ;		
		// elseif(empty($form["echelle"]))  $erreur["echelle"] ="remplissez tous les champs!"   ;		
		// elseif(empty($form["echelon"]))  $erreur["echelon"] ="remplissez tous les champs!"   ;		
		// elseif(empty($form["tele"]))  $erreur["tele"] ="remplissez tous les champs!"   ;		
		// elseif(empty($form["diplome"]))  $erreur["diplome"] ="remplissez tous les champs!"   ;		
		// elseif(empty($form["etablissement"]))  $erreur["etablissement"] ="remplissez tous les champs!"   ;		
		
		
		if (!isset($erreur)) {
				// $variables=[];
				$variables["pd"]= $form;
				render("Views/pdf1.php",$variables);
				// header("location: Views/pdf1.php");
				
		}
	}
	
	
	
	$variables["erreur"]=isset($erreur) ? $erreur : [] ;
	render("Views/form1.php", $variables);
}

function RHlistempp(){
	$view = "Views/RHLISTEEMP.php";
	$variables=[];
	render($view, $variables);
}
function RHlistemp(){
	$view = "Views/RHlistemp.php";
	$variables=[];
	render($view, $variables);
}

//////////////////User//////////////////

function login(){
	
	$user =["Login"=>"","PW"=>""];
	
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		
		$user =	$_POST;
		
		if(empty($user["Login"]))  $erreur["Login"] ="Le login est vide !..."   ;
		elseif(empty($user["PW"]))  $erreur["PW"] ="Le mot de passe est vide !..."   ;		
		elseif(!user_exists($user)) $erreur["User"]= "Login ou mot de passe incorrect!...";
		
		if (!isset($erreur)) {
			
				$_SESSION["Login"]= $user["Login"];
				header ("location: index.php");
				
		}
	}
	
	
	
	$variables["erreur"]=isset($erreur) ? $erreur : [] ;
	render("Views/vFormLogin.php", $variables);
}


function deconnexion(){
	session_destroy();
	header ("location: index.php");
}


/////////////////////////////////

function render($vue , array $variables=array()) {

	if($vue == "Views/vFormLogin.php"){
		
		require($vue);
		
	}
	elseif(file_exists($vue)) {
		// ob_start();
		require($vue);
		// $view= ob_get_clean();
		// require("Views/template.php");
	}
	
	else throw New Exception("La vue $vue n'existe pas");


    
	

}
