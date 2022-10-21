<?php
session_start();

include ("../Controller/UserController.php");

if($_POST['mail']=='' && $_POST['nom']==''&& $_POST['prenom']==''&& $_POST['gsm']==''&& $_POST['mdp']==''){
    die("error");}
    else {
        $admin = new users(null,$_POST['mail'],$_POST['mdp'],$_POST['nom'],$_POST['prenom'],null,$_POST['gsm'],null,1,1);
        $UserController=new UserController();
         if($UserController->Adduser($admin)=="")
        {
            echo "success";
        }
        else
        {
            die($UserController->Adduser($admin));
        }

    }





?>