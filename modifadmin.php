<?php
session_start();

include ("../Controller/UserController.php");

if($_POST['mail']=='' && $_POST['nom']==''&& $_POST['prenom']==''&& $_POST['gsm']==''&& $_POST['mdp']==''){
    die("error");}
    else {
        $admin = new users($_SESSION['id_user'],$_POST['mail'],$_POST['mdp'],$_POST['nom'],$_POST['prenom'],null,$_POST['gsm'],null,1,1);
        $UserController=new UserController();
         if($UserController->Updateuser($admin)=="")
        {
             $_SESSION['mail']=$_POST['mail'];
             $_SESSION['nom']=$_POST['nom'];
             $_SESSION['prenom']=$_POST['prenom'];
             $_SESSION['telephone']=$_POST['gsm'];
             $_SESSION['mdp']=$_POST['mdp'];
            echo "success";
        }
        else
        {
            die($UserController->Updateuser($admin));
        }

    }





?>