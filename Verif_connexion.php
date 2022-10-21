<?php
include ("../Controller/UserController.php");
session_start();
$UserJson='';
if($_POST['mail']=='' && $_POST['mdp']==''){
 die("error");}
 else {
    $UserController=new UserController();
    $User =  $UserController->Verifaccount($_POST['mail'], $_POST['mdp']);
    foreach ($User as $u){
        $UserJson='{
            "id_user"="'.$u['id_user'].'",
            "mail"="'.$u['mail'].'",
            "nom"="'.$u['nom'].'",
            "prenom"="'.$u['prenom'].'",
            "date_naissance"="'.$u['date_naissance'].'",
            "telephone"="'.$u['telephone'].'",
            "adresse"="'.$u['adresse'].'",
            "type_user"="'.$u['type_user'].'",
            "mdp"="'.$u['mdp'].'"
             }';

             $_SESSION['id_user']=$u['id_user'];
             $_SESSION['mail']=$u['mail'];
             $_SESSION['nom']=$u['nom'];
             $_SESSION['prenom']=$u['prenom'];
             $_SESSION['date_naissance']=$u['date_naissance'];
             $_SESSION['telephone']=$u['telephone'];
             $_SESSION['adresse']=$u['adresse'];
             $_SESSION['type_user']=$u['type_user'];
             $_SESSION['mdp']=$u['mdp'];


    }
if ($UserJson=="")
{
    die("error");

}
else
{
    echo $_SESSION['type_user'];
}
    
 }














?>