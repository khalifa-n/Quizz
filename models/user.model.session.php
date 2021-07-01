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
         $arrayuser[]=$user;  
         //var_dump($arrayuser);
         
    //transforme le tableau php en chaine de caractere
    $json=json_encode($arrayuser);
    //GENERATEUR DE ID
    $user['id'] = uniqid(); 
    //prend la chaine de carac et le met dans le fichier json
    file_put_contents(ROUTE_DIR.'data/user.data.json',$json);
} 
function nbr_de_joueur($arrayuser):void{
    foreach ($arrayuser as $user);
}
?>