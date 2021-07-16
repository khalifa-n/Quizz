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
    function get_element_to_display ($array , int $page ,int $nombre_element ):array{
        $array_element=[];
        $indice_depart=($page*$nombre_element)-$nombre_element;
        $indice_darrrivée=$nombre_element*$page;
       for ($i= $indice_depart; $i < $indice_darrrivée; $i++) { 
           if ($i> count($array) ) {
               return $array_element;
           }else {
            $array_element[]=$array[$i];
           }
       }
       return $array_element;
    }
    function nombre_page_total ($array ,$nombre_element):int{

        $nombre_page_total=0;
        if (count($array)%$nombre_element==0) {
            $nombre_page_total=count($array)/$nombre_element ;

        }else {
            $nombre_page_total=(count($array)/$nombre_element) +1 ;
        }
        return $nombre_page_total;
    }
?>