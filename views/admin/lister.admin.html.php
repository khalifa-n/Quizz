<?php
     require_once(ROUTE_DIR.'views/inc/header.html.php');
    ?>
<?php
     require_once(ROUTE_DIR.'views/inc/deconect.html.php');
    ?>
     <div class="container ">
		    <div class="row row-hauteur bg-white">
			    <div class="col-md-4">
			    <?php
    require_once(ROUTE_DIR.'views/inc/menu.html.php');
    ?>
  
			    </div>
     <?php	
    $json = file_get_contents(ROUTE_DIR.'data/user.data.json'); 
    $arrayuser=json_decode($json,true);
    ?> 
    <div class="  col-md-8">
	<div class="card conteneur-liste p-4 ">
	<div class="text-center ">Liste des Admin </div>  
<div class="card conteneur-nom  align-self-center border border-danger "><i></i>
<table class="table">
  <thead>
     
    <tr>
      <th scope="col">N°</th>
      <th scope="col">PRENOM</th>
      <th scope="col">NOM</th>
      <th scope="col">SCORE</th>
    </tr>
   
  </thead>
  <tbody>
    <tr>
    <?php foreach ($arrayuser as $user):?>
  <?php if ($user['role']=='ROLE_ADMIN'):?>

      <th scope="row"></th>
      <td><?=$user['prenom']?></td>
      <td><?=$user['nom']?></td> 
      <!-- <td><?=$user['score']?></td> -->
    </tr>
    <?php endif ?>  
    <?php endforeach ?>
    
	    </div>

		</div>	
		</div>		
    </div>
    </div> 
    </div>  
    <?php
    require_once(ROUTE_DIR.'views/inc/footer.html.php');
    ?>
  