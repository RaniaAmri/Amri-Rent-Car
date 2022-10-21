<?php
include ("../Controller/UserController.php");
session_start();

if($_SESSION['type_user']==1)

{

    $UserController=new UserController();
    $Admins =  $UserController->Liste_admins();
    $output="
    <table class='table lms_table_active3 '>
    <thead>
    <tr>
    <th scope='col'>Nom</th>
    <th scope='col'>Prénom</th>
    <th scope='col'>E-Mail</th>
    <th scope='col'>GSM</th>
    <th scope='col'>Status</th>
    </tr>
    </thead>
    <tbody>
    ";
    foreach($Admins as $A)
    {
        $output.="
 
        <tr>
        <th scope='row'> <a href='#' class='question_content'> ".$A['nom']."</a></th>
        <td>".$A['prenom']."</td>
        <td>".$A['mail']."</td>
        <td>".$A['telephone']."</td>
        <td>".($A['etat_compte']==1?'<a href="#" class="status_btn">Active</a>':'<a href="#" class="badge bg-danger">Désactiver</a>')."</td>
        </tr>
        ";
    
    }
    


 echo $output;
}
else
die('Permission denied');







?>