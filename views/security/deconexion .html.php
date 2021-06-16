<?php 
require_once(ROUTE_DIR.'views/inc/header.html.php');
?>
<div class="container-fluid bg-cover"> 
<div class="container col-sm-6 mt-5">
  <div class="card long-cadre  ">
       <div class=" login-form ">
       <!-- <div><h6 class="  login-form-text">CREER ET PARAMETRER VOS QUIZZ</h6></div> -->
       <div class="deconnexion"><a href="<?= WEB_ROUTE.'?controlleurs=security&views=deconexion'?> " class="btn-color text-light">Deconnexion joueur</a></div>
       </div>

  </div>
</div>
</div>

<?php require_once(ROUTE_DIR.'views/inc/footer.html.php')?>