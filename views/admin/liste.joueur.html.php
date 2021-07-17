<?php
     require_once(ROUTE_DIR.'views/inc/header.html.php');
    ?>
<?php
     require_once(ROUTE_DIR.'views/inc/deconect.html.php');
    ?>
     <div class="container">
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
	<div class="card conteneur-liste p-4">
	<div class="text-center ">Liste des joueurs par score </div>  
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

  <?php foreach ($arrayuser as $user):?>
  <?php if ($user['role']=='ROLE_JOUEUR'):?>
 <tr>
      <th scope="row"></th>
      <td><?php echo $user['prenom']?></td>
      <td><?php echo $user['nom']?></td> 
      <td><?php echo $user['score']?></td>
    </tr>
    <?php endif ?>  
    <?php endforeach ?>
  </tbody> 
  </table> 
	    </div>


		</div>	
		</div>		
    </div>
    </div> 
    </div>  
    <?php
    require_once(ROUTE_DIR.'views/inc/footer.html.php');
    ?>
  