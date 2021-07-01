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
			    <div class="col-md-8">
				<div class="card  conteneur">
					
							
		<span class="text-right m-2">nombre de question/jeu<input type="number" style="width: 40px;"> ok</span>  
		
	<div class="card conteneur2  align-self-center border border-secondary ">
	
	<div>1.liste des questions?</div>
		<div><input class="bg-danger" type="checkbox">html</div>
		<div><input type="checkbox">R</div>
		<div><input type="checkbox">java</div>	
		
		<div>
		2.D'oú vient le corona virus?	
		<div>
  <input type="radio" id="huey" name="drone" value="huey"
         checked>
  <label for="huey">italie</label>
</div>

<div>
  <input type="radio" id="dewey" name="drone" value="dewey">
  <label for="dewey">chine</label>
</div>
<span>3.Quel terme définit langage qui s’adapte <br>
   Sur Android et sur iOS ?</span> <br>
   <input type="text"><br>
   4.Quelle est la première école de décodage ?
		<div>
  <input type="radio" id="huey" name="drone" value="huey"
         checked>
  <label for="huey">Simplon</label>
</div>

<div>
  <input type="radio" id="dewey" name="drone" value="dewey">
  <label for="dewey">Orange Digital Center</label>
</div>	

<span>5.Les précurseurs de la revolution digitale ?</span>
<div>
  <input type="radio" id="huey" name="drone" value="huey"
         checked>
  <label for="huey">GAFAM</label>
</div>

<div>
  <input type="radio" id="dewey" name="drone" value="dewey">
  <label for="dewey">CIA-FBI</label>
</div>	

	</div>	
					</div>   
			    </div>
			    
		    </div>
	    </div>
	    
	    <?php
    require_once(ROUTE_DIR.'views/inc/footer.html.php');
    ?>
  