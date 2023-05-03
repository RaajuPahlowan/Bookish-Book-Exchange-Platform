<?php
require('../model/db.php');
$errorCount=0;

session_start();
$db = new db();
$conn = $db->Connect();

if (isset($_SESSION['usr'])) {

      header('Location: ../view/homepage.php');

} else {
    if (isset($_REQUEST["signup"])) {

        if (isset($_REQUEST['username'])&& $_REQUEST['username']!=''&&strlen($_REQUEST['password'])>=3)
            {

            if ($db->SignupUser($conn,$_REQUEST['username'],$_REQUEST['password'], 'admin')) {

                echo ('usr created');
               
            } 
            else
             {

               echo 'could not created';

            }
        } 
        else 
        {
            echo "<br>the database file might be deleted, plase try to register with new one and try again later";
        }
    }
}

?>