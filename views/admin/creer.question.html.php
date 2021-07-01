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
    <div class="  col-md-8">
	<div class="card conteneur-liste p-4">
	<div class="text-center ">paramatrer votre question </div> 
	<div class="card conteneur-point  align-self-center border border-danger ">
	<div>	
	<label  for="question"  class="text-Avertissement">Question</label>
	<input class="question" type="text" style="width:300px ;height:100px"> <br>
	<label  for="point"  class="text-Avertissement">nbre de points</label>
	<input class="point" type="number" style="width:80px ;height:50px" > <br><br>
	<label  for="t-reponse"  class="text-Avertissement">type de reponse</label>
	<input class="t-reponse" value="donner le type de reponse"type="text" style="width:220px ;height:20px">
	<i class="fa fa-2x  fa-plus"></i>
	<i class="fa fa-trash"></i><br><br>
	<label  for="reponse"  class="text-Avertissement">Reponse 1</label>
	<input class="reponse" type="text" style="width:170px ;height:20px">
	<input class="reponse"  type="text" style="width:40px ;height:30px">
	<label  for="circle"  class="text-Avertissement">Reponse</label>
	<input class="circle" type="text" style="width:40px ;height:30px">		
	</div>
	</div>
	<button type="submit" class="btn  btn-enregistre btn-primary">Enregistre</button>
	</div>
	</div>
	</div>
	</div>	
	<?php require_once(ROUTE_DIR.'views/inc/footer.html.php')?>