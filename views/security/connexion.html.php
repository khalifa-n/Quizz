 <?php 

if (isset($_SESSION['arrayError'])) {
   $arrayError=$_SESSION['arrayError'];
   unset($_SESSION['arrayError']);
}
require_once(ROUTE_DIR.'views/inc/header.html.php');
?>
  
<div class="container-fluid bg-cover"> 
<!-- <nav class="navbar navbar-light  ">

  <img  class="img-logo" src="<?= WEB_ROUTE."img/coudy.JPG" ?>" alt="logo"> 
   <div class=" container  justify-content-center "><h3>Le plaisir de jouer</h3></div> 
</nav> -->
        <div class="container col-sm-6 mt-5">
       
        <div class="card  ">
            <div class=" login-form ">
        <h3 class="text-left  login-form-text">login form</h3>
        </div>
                <div id="login-row" class="row justify-content-center align-items-center container">
                <div id="login-column" class="col-md-6 container">
                    <div id="login-box" class="col-md-12 container">
                        <?php if (isset($arrayError['erreurConnexion'])):?>
                    <div class="alert alert-primary container" role="alert">
                        <strong><?php echo isset($arrayError['erreurConnexion']) ? $arrayError['erreurConnexion']: '';?> </strong>
                    </div>
                    <?php endif ?>
                        <form id="login-form" class="form" action="<?=WEB_ROUTE?>" method="POST">
                        <input type="hidden" name="controlleurs" value="security"/>
                        <input type="hidden" name="action" value="connexion"/>
                           
                            <div class="input-group-inline">
                                <label for="username" class="text-Avertissement">Login</label><br>
                                <div class="input-group-append">
                                    <input type="text" name="login" class="form-control">
                                    <span class="input-group-text"> <i class="fa fa-user" aria-hidden="true"></i></span>
                                </div>
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
                            <div class="form-group">
                                
                                <button type="submit" name="btn_submit" class="btn btn-connexion btn-info btn-md" value="btn_connexion">Connexion</button>
                            </div>
                            <div id="register-link" class=" text-right">
                                <a href="<?= WEB_ROUTE.'?controlleurs=security&views=inscription'?> " class="btn-color text-dark">S'inscrire en tant que joueur</a>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
               
           
        </div>
        </div>
</div>

<?php require_once(ROUTE_DIR.'views/inc/footer.html.php')?>
 <style>
 
 </style>