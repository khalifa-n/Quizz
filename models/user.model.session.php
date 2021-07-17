<?php 
function find_login_password(string $login, string $password): array{
    //lire contenu fichier
    $json=file_get_contents(ROUTE_DIR.'data/user.data.json');
    //convertir le json en tableau
    $arrayuser=json_decode($json,true);
    foreach($arrayuser as $user){
        if ($user['login']==$login && $user['password']==$password) {
            return $user;
        }
    }
    return [];
}
function add_user(array $user){
    // prend les element du fichier json et le transform en string (chaine caract)
    $json = file_get_contents(ROUTE_DIR.'data/user.data.json'); 
    // json_decode : prend la chaine et le transform en tableau php
    $arrayuser=json_decode($json,true);
    //ajoiter l'utilisateur dans le tableau php
    $user['id'] = rand(); 

         $arrayuser[]=$user;  
         //var_dump($arrayuser);
         
    //transforme le tableau php en chaine de caractere
    $json=json_encode($arrayuser);
    //GENERATEUR DE ID
    //prend la chaine de carac et le met dans le fichier json
    file_put_contents(ROUTE_DIR.'data/user.data.json',$json);
} 
function nbr_de_joueur($arrayuser):void{
    foreach ($arrayuser as $user);
}
function add_question (array $question){
	$json = file_get_contents(ROUTE_DIR.'data/question.json');
	$arrayquestion=json_decode($json,true);
	$question['id'] =rand();
	$arrayquestion[]=$question;  
	$json=json_encode($arrayquestion);
     
	file_put_contents(ROUTE_DIR.'data/question.json',$json); 
    }
    
    function suppression_question(string $id):bool{
        $json =file_get_contents(ROUTE_DIR.'data/question.json');
        // 2 convertir le json en tableau
        $arrayQuestion = json_decode($json,true); 
        $tab = [];
        $ok = false;
          foreach( $arrayQuestion as $question){
              if ($question['id'] == $id) {
                $ok = true;
              }else{
                $tab [] = $question;
              }
          }
          if($ok){
            $json = json_encode($tab);
            file_put_contents(ROUTE_DIR.'data/question.json',$json);
          }
          return $ok;
      
      }
      function find_question_id( $id):array{
        $json =file_get_contents(ROUTE_DIR.'data/question.json');
        $arrayUser = json_decode($json , true);
        foreach($arrayUser as $user ){
          if ($user ['id'] == $id){
            return $user;
          }
        }
        return[];
      }
?>