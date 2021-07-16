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
    $json = file_get_contents(ROUTE_DIR.'data/question.json'); 
    $arrayquestion = json_decode($json,true);
    
    ?> 
<div class="col-md-8">
		<div class="card  conteneur">
					
		      <span class="text-right m-2">nombre de question/jeu<input type="number" style="width: 40px;"> ok</span>  
    
          <?php foreach ($arrayquestion as $question => $question) :?>
            
                  <?php $question = $arrayquestion[$question] ?>
                <div class="p-3">
                  <label><?= $question['question']?></label> 

                  <?php if ($question['type_de_reponse']=='choix_multiple'):?>
                    <input type="checkbox" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                  <?php endif ?>
               
                  <?php  if ($question['type_de_reponse']=='choix_unique'):?>
                    <input type="radio" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                  <?php endif ?>
                  <?php  if ($question['type_de_reponse']=='choix_simple'):?>
                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                  <?php endif ?>
                </div>  
        <?php endforeach?>
        
        <?php for ($i=0; $i < 10; $i++) :?>
        <?php if (isset( $question['nbrreponse'] ) ) :?>

        <?php endif?>
        <?php endfor ?> 
    </div>
</div>
 
  
  
		
	
	 
	
	     
	    <?php
    require_once(ROUTE_DIR.'views/inc/footer.html.php');
    ?>
  