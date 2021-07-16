<?php 
 if (!est_admin()) header('location' .WEB_ROUTE.'?controlleurs=security&view=connexion');
if ($_SERVER['REQUEST_METHOD']=='GET') {	
 if (isset($_GET['views'])) {
 if($_GET['views']=='liste.question'){
require(ROUTE_DIR.'views/admin/liste.question.html.php');
	
 }elseif ($_GET['views']=='liste.joueur') {
require(ROUTE_DIR.'views/admin/liste.joueur.html.php');
		 
}elseif ($_GET['views']=='creer.question') {

	require(ROUTE_DIR.'views/admin/creer.question.html.php');		
 }elseif ($_GET['views']=='tableau.bord') {
	require(ROUTE_DIR.'views/admin/tableau.bord.html.php');
 }elseif ($_GET['views']=='lister.admin') {
	require(ROUTE_DIR.'views/admin/lister.admin.html.php');
   } 
}
}elseif  ($_SERVER['REQUEST_METHOD']=='POST') {	
	if (isset($_POST['action'])){
	 if (isset($_POST['action'])=='creer.question') {
		 if (isset($_POST['enregistrer']) ) { 

			unset($_POST['action']);
			unset($_POST['controlleurs']);
			creer_question($_POST);
			header('location:'.WEB_ROUTE.'?controlleurs=admin&views=liste.question');	
			 }elseif (isset($_POST['boutton_plus']) ){
				$_SESSION['point']=$_POST['point'];
				$_SESSION['nbrreponse']=$_POST['nbrreponse'];		
				$_SESSION['question']=$_POST['question'];
			 	$recuper_nbr_reponses=$_POST['nbrreponse'];
			 	$_SESSION['nbrreponse']=$recuper_nbr_reponses;
				 $recuper_input=$_POST['type_de_reponse'];
				 $_SESSION['type_de_reponse']=$recuper_input;
 
			 	header('location:'.WEB_ROUTE.'?controlleurs=admin&views=creer.question');exit;

			 }
		}
	}

} 

function creer_question(array $data):void{
	$arrayError=array();
	extract($data);
validation_question($question,"question",$arrayError);
//validation_question($reponse,"reponse",$arrayError);
//validation_question($point,"point",$arrayError);

if (form_valid($arrayError)) {
	
	add_question($data);
	header('location:'.WEB_ROUTE.'?controlleurs=admin&views=liste.question');

}else {
	$_SESSION['arrayError']=$arrayError;
       header('location:'.WEB_ROUTE.'?controlleurs=admin&views=creer.question');
    }

}
//  function type_de_reponse()
?>