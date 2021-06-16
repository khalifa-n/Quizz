<?php 
if (isset($_SESSION['arrayError'])) {
  $arrayError=$_SESSION['arrayError'];
  unset($_SESSION['arrayError']);
}

require_once(ROUTE_DIR.'views/inc/header.html.php')
?>
<div class="container-fluid bg-cover"> 

<?php if (isset($arrayError['erreurconnexion'])) :?>
 <div class="alert alert-primary" role="alert" > 
    <strong><?php echo isset($arrayError['erreurConnexion']) ? $arrayError['erreurConnexion'] : " "?></strong>
<?php  endif ?> 
</div>  

  <body>
        <div class="container col-sm-6 mt-5">
       
        <div class="card ">
            <div container-fluid class="container login-form ">
            <div>
            <h3 class="text-left d-block  login-form-text">Inscription</h3>
        <!-- texte accrocheur -->
        <h6 class="text-right d-inline-block  "> S'inscrire pour tester votre niveau de culture générale</h6>
        </div>
        </div>
        <div id="login-row" class="row justify-content-center align-items-center"> 
                 <div id="login-column" class="col-md-10"> 
                     <div id="login-box" class="col-md-12"> 
         <form id="login-form" class="form" action="<?php WEB_ROUTE?>" method="POST">
         <input type="hidden" name="controlleurs" value="security">  
         <input type="hidden" name="action" value="inscription">  
            <!-- l'avatar -->
          <img src="<?= WEB_ROUTE.'/img/images.jpeg' ?>" class="rounded-circle w-25 rounded mx-auto d-block mt-0" alt="avatar">
                <div class="form-group">
                                <label for="nom"  class="text-Avertissement">nom</label><br>
                                <input type="text" name="nom" class="form-control"id="prenom" placeholder="Aaaaa">
                                <small class="form-text text-danger">
                                <?php echo isset($arrayError['nom']) ? $arrayError['nom']: '';?> 
                                </small>
                           </div>
                            
               
                <div class="form-group">
                                <label for="prenom" class="text-Avertissement">prenom</label><br>
                                <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Bbbb">
                                <small class="form-text text-danger">
                                <?php echo isset($arrayError['prenom']) ? $arrayError['prenom']: '';?> 
                                </small>
                           </div>
               
               
                <!-- <div class="form-group">
                                <label for="datenaiss" class="text-Avertissement">date de naissance</label><br>
                                <input type="text" name="datenaiss" class="form-control" id="datenaiss"placeholder="Aabbab"> 
                                <small class="form-text text-danger">
                                <?php echo isset($arrayError['datenaiss']) ? $arrayError['datenaiss']: '';?> 
                                </small>
                           </div> -->

                
                <div class="form-group">
                                <label for="email" class="text-Avertissement">login</label><br>
                                <input type="text" name="login" class="form-control" id="login"placeholder=".....">
                                <small class="form-text text-danger">
                                <?php echo isset($arrayError['login']) ? $arrayError['login']: '';?> 
                                </small>
                           </div>
                
                <div class="form-group">
                                <label for="password" class="text-Avertissement">mot de passe</label><br>
                                <input type="text" name="password" class="form-control" id="password"placeholder=".....">
                                <small class="form-text text-danger">
                                <?php echo isset($arrayError['password']) ? $arrayError['password']: '';?> 
                                </small>
                           </div>
  
                
               
                <div class="form-group">
                                <label for="confirm password" class="text-Avertissement"> confirme mot de passe</label><br>
                                <input type="text" name="confirm password" class="form-control" id="confirm password"placeholder="Aaaaa">
                                <small class="form-text text-danger">
                                <?php echo isset($arrayError['confirmpassword']) ? $arrayError['cofirmpassword']: '';?> 
                                </small>
                           </div>
                
                <div class="form-group">
                                <label for="avatar" class="text-Avertissement">avatar</label><br>
                                <input type="file" name="avatar" class="form-control" id="avatar">
                                <small class="form-text text-danger">
                           </div>
  
              <button type="submit" class="btn  btn-connexion btn-primary">Submit</button>
        </form>
            </div>  
           </div>
                     </div>
                    </div>
                   </div>
                 </div> 
  </body>
  <?php require_once(ROUTE_DIR.'views/inc/footer.html.php')?>
  
 