<?php
require('../model/db.php');
$errorCount=0;

session_start();
$db = new db();
$conn = $db->Connect();

if (isset($_SESSION['user'])) {

      header('Location: ../view/homepage.php');

} else {
    if (isset($_REQUEST["login"])) {

        if (isset($_REQUEST['username'])&& $_REQUEST['username']!=''&&strlen($_REQUEST['password'])>=3)
         {
            
            $authResult=$db->AuthUser($conn,$_REQUEST['username'],$_REQUEST['password']);
            if($authResult)
            {
               $_SESSION['user']=$_REQUEST['username'];
               $_SESSION['role']=$authResult;
               header('Location: ../view/homepage.php');
            }
            else
            {
                echo 'username or password is incorrect, please try with correct one!';
            }
            
        } 
        else 
        {
            echo "<br>the database file might be deleted, plase try to register with new one and try again later";
        }
    }
}

?>
