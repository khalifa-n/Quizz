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
        <div class="">
              <?php for ($i = 0 ; $i <= count($arrayquestion)-1; $i++ ):?>
                <?php $question = $arrayquestion[$i] ?>
                        <div  class="ml-2 mt-2">
                            <span class="ml-5 mt-5" ><?=($i+1).':'.' '.$question['question']?></span> 
                            <a name="" id="" class="btn btn1 float-right" style ="margin-top: 28px;" href="<?=WEB_ROUTE.'?controlleurs=admin&view=edit&id='.$question['id']?>" role="button"> <i class="fas fa-edit "></i></a>
                            <a name="" id="" class="btn btn1 float-right"  href="<?=WEB_ROUTE.'?controlleurs=admin&views=supprimer&id='.$question['id']?>" role="button"> <i class="far fa-trash-alt"></i></a>
                        </div>
                            <label class="p-5 ml-5">
                                        
                                <?php if($question['reponse']){ ?>
                                    <?php foreach ($question['reponse'] as $res ):?>
                                        <?php if($question['type_de_reponse'] == 'text'):?>
                                            <input type="text" class="form-check-input" name="text" id="" value="" >
                                            <?=$res?></br>
                                        <?php endif ?>
                                        <?php if($question['type_de_reponse'] == 'simple'):?>
                                            <input type="radio" class="form-check-input" name="radio" id="" value="" >
                                        <?php endif ?>
                                        <?php if($question['type_de_reponse'] == 'choix_multiple'):?>
                                            <input type="checkbox" class="form-check-input" name="checkbox" id="" value="" >
                                        <?php endif ?>
                                        <?=$res.'</br>'?>
                                    <?php endforeach ?>
                                <?php }?>
                                       
                            </label>
                                       
                    <?php endfor ?>
                 

                </div> 
    </div>
</div>

 
  
  
		
	
	 
	
	     
	    <?php
    require_once(ROUTE_DIR.'views/inc/footer.html.php');
    ?>
  