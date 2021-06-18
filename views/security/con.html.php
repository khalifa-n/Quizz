<?php 

if (isset($_SESSION['arrayError'])) {
   $arrayError=$_SESSION['arrayError'];
   unset($_SESSION['arrayError']);
}
require_once(ROUTE_DIR.'views/inc/header.html.php');
?>
      <div class="container col-md-8 ml-auto mr-auto">
	      <div class="row">
	      <?php if (isset($arrayError['erreurConnexion'])):?>
                    <div class="alert alert-primary container" role="alert">
                        <strong><?php echo isset($arrayError['erreurConnexion']) ? $arrayError['erreurConnexion']: '';?> </strong>
                    </div>
               <?php endif ?>
	      <form class="form" action="<?=WEB_ROUTE?>" method="POST">
                        <input type="hidden" name="controlleurs" value="security"/>
                        <input type="hidden" name="action" value="connexion"/>
                           
	      		<div class="form-group">
				<label for="">Login</label>
				<input type="text" name="login" id="" class="form-control" placeholder="" aria-describedby="helpId">
				<small class="form-text text-danger">
                                <?php echo isset($arrayError['login']) ? $arrayError['login']: '';?> 
                                </small>		      	
			</div>
			<div class="form-group">
                                <label  for="password"  class="text-Avertissement">Password</label>
                                <div class="input-group-append">
                                <input type="password" name="password" class="form-control " >
                                    <span class="input-group-text"> <i class="fa fa-lock" aria-hidden="true"></i></span>
                                </div>

                                <small class="form-text text-danger">
                                    <?php echo isset($arrayError['password']) ? $arrayError['password'] : ''; ?>  
                                </small>
                         </div>
	      </form>
	      </div>
      </div>
 <?php 

require_once(ROUTE_DIR.'views/inc/footer.html.php');
?>