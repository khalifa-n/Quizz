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
    $page=0;
    $nombre_page_total=0;
    $suivant=2;
    $précedent=0;
    if (!$_GET['page']) {
      $page=1; 
      $_SESSION['joueur']=$arragyuser;
      $nombre_page_total=nombre_page_total($_SESSION['joueur'],5);
      $joueur=get_element_to_display($_SESSION['joueur'],$page,5);
    }
    if ($_GET['page']) {
      $page=$_GET['page'];
      $suivant=$page+1;
      $précedent=$page-1;
      $_SESSION['joueur']=$arragyuser;
      $nombre_page_total=nombre_page_total($_SESSION['joueur'],5);
      $joueur=get_element_to_display($_SESSION['joueur'],$page,5);
    }

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
      <th scope="row">1</th>
      <td><?php echo $user['prenom']?></td>
      <td><?php echo $user['nom']?></td> 
      <td><?php echo $user['score']?></td>
    </tr>
    <?php endif ?>  
    <?php endforeach ?>
  </tbody> 
  </table> 
	    </div>
<a name="" id="" class="btn btn-primary" href="<?= WEB_ROUTE.'?controlleurs=admin&views=liste.joueur&page='.$suivant ?>" role="button">suivant</a>
<a name="" id="" class="btn btn-primary" href="<?= WEB_ROUTE.'?controlleurs=admin&views=liste.joueur&page='.$precedent ?>" role="button">precedent</a>
 

		</div>	
		</div>		
    </div>
    </div> 
    </div>  
    <?php
    require_once(ROUTE_DIR.'views/inc/footer.html.php');
    ?>
  