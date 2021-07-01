<?php 
 if (!est_admin()) header('location' .WEB_ROUTE.'?controlleurs=security&view=connexion');
if ($_SERVER['REQUEST_METHOD']=='GET') {	
 if (isset($_GET['views'])) {
 if($_GET['views']=='liste.question'){
require(ROUTE_DIR.'views/admin/liste.question.html.php');
	
 }elseif ($_GET['views']=='liste.joueur') {
require(ROUTE_DIR.'views/admin/liste.joueur.html.php');
	 
 }elseif ($_GET['views']=='creer.admin') {
	require(ROUTE_DIR.'views/admin/creer.admin.html.php');
		 
}elseif ($_GET['views']=='creer.question') {
	require(ROUTE_DIR.'views/admin/creer.question.html.php');		
 }elseif ($_GET['views']=='tableau.bord') {
	require(ROUTE_DIR.'views/admin/tableau.bord.html.php');
 }elseif ($_GET['views']=='lister.admin') {
	require(ROUTE_DIR.'views/admin/lister.admin.html.php');
 }
}
}

?>