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
	    <div class="card col-sm">
	    
            <h3 class="text-left d-block  login-form-text">Inscription</h3>
        <!-- texte accrocheur -->
        <h6 class="text-right d-inline-block  "> S'inscrire pour tester votre niveau de culture générale</h6>
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
                                <input type="text" name="confirmpassword" class="form-control" id="confirm password"placeholder="Aaaaa">
                                <small class="form-text text-danger">
                                <?php echo isset($arrayError['confirmpassword']) ? $arrayError['cofirmpassword']: '';?> 
                                </small>
                           </div>
                
                <div class="form-group">
                                <label for="avatar" class="text-Avertissement">avatar</label><br>
                                <input type="file" name="avatar" class="form-control" id="avatar">
                                <small class="form-text text-danger">
                           </div>
  
        <button type="submit" class="btn  btn-connexion btn-primary">creer compte </button>
	    </div>
	     
    </div>
    </div>
    </div>


    
     <?php
    require_once(ROUTE_DIR.'views/inc/footer.html.php');
    ?>
  
  