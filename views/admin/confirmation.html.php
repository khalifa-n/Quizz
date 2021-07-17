<?php
     require_once(ROUTE_DIR.'views/inc/header.html.php');
    ?>

<div class="pageconfirm col-md-8 ml-auto mr-auto  ">
                            
			    <h2 class="text-center mt-5">PAGE DE CONFIRMATION</h2>
			      <div class="row ">
			     <div class="column ">
				 <div class="card">
				 <h3>Appuyez sur OUI pour contineur la suppression ou NON pour annuler</h3>
	     
				     <div class="d-flex justify-content-between mt-2">
					 <div class="d-flex">
					   <a name="" id="" class="btn btn2" href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste.question'?>" role="button">NON</a>
					   <a name="" id="" class="btn btn1 " href="<?=WEB_ROUTE.'?controlleurs=admin&views=confirme&id='.$question['id']?>" role="button">OUI</a>
					 
					 </div>
				     </div>
				   </div>
			     </div>
			 </div>  





    <?php
    require_once(ROUTE_DIR.'views/inc/footer.html.php');
    ?>
  