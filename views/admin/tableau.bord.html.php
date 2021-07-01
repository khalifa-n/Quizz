<?php
require_once(ROUTE_DIR.'views/inc/header.html.php');
?>
<?php
require_once(ROUTE_DIR.'views/inc/deconect.html.php');
?>
 <?php	
    $json = file_get_contents(ROUTE_DIR.'data/user.data.json'); 
    $arrayuser=json_decode($json,true);
    ?> 
<div class="container">
	<div class="row row-hauteur bg-white">
		<div class="col-md-4">
		
<?php require_once(ROUTE_DIR.'views/inc/menu.html.php');?>
		</div>	
<div class="  col-md-8 ">
<div class= " border border-danger mt-2">
<div class="text-center ">paramatrer votre question </div> 
<div class="card    ">

		<?php $json = file_get_contents(ROUTE_DIR.'data/user.data.json'); 
		$arrayuser=json_decode($json,true);
		$cptj=$cpta=$cptq=0;
			foreach ($arrayuser as $user){
			if ($user['role']=='ROLE_JOUEUR'){
			$cptj++;	  
			}elseif($user['role']=='ROLE_ADMIN'){
			$cpta++;
			}
		}
		?>
	 

	
	
	 
	 	
	 <div class="d-flex justify-content-between ">

	 <div class="nbr-joueur " ><?php echo $cptj ?> <br> nbr-joueur</div>	
	<div class="nbr-question " ><?php echo $cpta ?><br> nbr-admin</div>
	<div class="nbr-admin m" ><?php echo $cptq ?><br> nbr-question</div>
	</div>
</div>
</div>
</div>
</div>
<?php
require_once(ROUTE_DIR.'views/inc/footer.html.php');
?>