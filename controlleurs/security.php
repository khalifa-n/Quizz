<?php 
//ar_dump($_SERVER['REQUEST_METHOD']);
//die("$_REQUEST");
if ($_SERVER['REQUEST_METHOD']=='GET') {
    if (isset($_GET['views'])) {
       if ($_GET['views']=='connexion') {
               require(ROUTE_DIR.'views/security/connexion.html.php');
       }elseif($_GET['views']=='inscription')  {
               require(ROUTE_DIR.'views/security/inscription.html.php');
       }elseif($_GET['views']=='deconexion'){
           deconexion();
           require(ROUTE_DIR.'views/security/connexion.html.php');
      }else {
        require(ROUTE_DIR.'views/security/connexion.html.php');
        }
}
}elseif ($_SERVER['REQUEST_METHOD']=='POST')  {
    if (isset($_POST['action'])) {
       if ($_POST['action']=='connexion') {
           connexion($_POST['login'],$_POST['password']);
       }elseif ($_POST['action']=='inscription') { 

           unset ($_POST['comfirmpassword']);
           unset ($_POST['controlleurs']);
           unset ($_POST['action']);

         inscription($_POST); 
         var_dump('y');
         die();

       }
    }
}

function connexion(string $login,string $password):void{ 
    $arrayError=array();
     validation_login($login,'login',$arrayError);
     validation_password($password,'password',$arrayError);

     if (form_valid($arrayError)) {
        // appel du model
        $user = find_login_password($login , $password);
        if (count($user)==0) {
          $arrayError['erreurConnexion']="login ou password incorrect ";
          $_SESSION['arrayError']= $arrayError;
           header('location:'.WEB_ROUTE.'?controlleurs=security&views=connexion');exit;
        }else{
            if ($user['role']=='ROLE_ADMIN') {
                header('location:'.WEB_ROUTE.'?controlleurs=admin&views=liste.question');exit;
            }elseif ($user['role']== 'ROLE_JOUEUR') {
             header('location:'.WEB_ROUTE.'?controlleurs=admin&views=jeu');exit;
            }
        }
     }else {
       
          $_SESSION['arrayError']=$arrayError;
         header('location:'.WEB_ROUTE.'?controlleurs=security&views=connexion');exit;
     }
}

function inscription(array $data):void{
            $arrayError=array();
            extract($data);
            validation_nom($nom,'nom',$arrayError);
            validation_nom($prenom,'prenom',$arrayError);
            validation_login($login,'login',$arrayError);
            validation_password($password,'password',$arrayError);             
            if ($password!=$confirmpassword) {
                $arrayError['confirmpassword']='les deux mots passes ne sont pas identique ';
            }
               
        if (form_valid($arrayError)) {
            add_user($data);
 
        header('location:'.WEB_ROUTE.'?controlleurs=security&views=connexion');exit;
        }else {
            $_SESSION['arrayError']=$arrayError;
           header('location:'.WEB_ROUTE.'?controlleurs=security&views=inscription');exit;
        }
    }

function deconexion ():void{
    unset($_SESSION['userconnect']);
    // header('location:'.WEB_ROUTE.'?controlleurs=securiy&view=connexion');

    
}



