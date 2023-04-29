<?php
require('../model/db.php');
// $errorCount=0;
// $haveCookie=false;
// $isValid=false;
// $dirBalanceSheet='balanceSheets';
// $dirActiveDirectory='activeDirectory';
// session_start();
$db = new db();
$conn = $db->Connect();

if (isset($_SESSION['usr'])) {

    //  header('Location: ../view/dashboard.php');

} else {
    if (isset($_REQUEST["signup"])) {

        // echo $_REQUEST['username'];
        // echo $_REQUEST['password'];
        if (
            isset($_REQUEST['username'])
        ) {

            if ($db->SignupUser($conn, $username, $password, 'admin')) {

                echo ('usr created');
                // if($db->AuthUser($conn,$username,$password))
                // {
                //    $_SESSION['usr']=$username;
                //   $sheet = $db->GetBalanceSheetByUserID($conn, $username);
                //   if($sheet->num_rows==1)
                //   {
                //     foreach($sheet as $sh=>$s)
                //     {

                //       $_SESSION['balance']=$s['availableBalance'];
                //       $_SESSION['limit']=$s['currentLimit'];
                //       $_SESSION['totalLimit']=$s['totalLimit'];
                //       $_SESSION['due']=$s['due'];
                //     }
                //     header('Location: ../view/dashboard.php');
                //   }
                // }

                // $data=json_decode(file_get_contents($dirActiveDirectory),true);
                // if(array_key_exists($username,$data))
                // {
                //   //  echo $data['01969897555']->password;

                //     $user=$data[$username];

                //    if($user['password']==$password)
                //    {

                //      if(file_exists($dirBalanceSheet))
                //      {  
                //         $balanceSheet=json_decode(file_get_contents($dirBalanceSheet),true);
                //         $userSheet= $balanceSheet[$_SESSION['usr']];
                //         $balance=$userSheet['availableBalance'];

                //         $limit=$userSheet['limit'];
                //         $_SESSION['balance']=$balance;
                //         $_SESSION['limit']=$limit;
                //         $_SESSION['totalLimit']=$userSheet['totalLimit'];
                //         $_SESSION['due']=$userSheet['due'];
                //         header('Location: ../view/dashboard.php');
                //      }
                //      else{
                //          echo '<br> the database has been removed or deleted, please try to create new agent';
                //      }

                //    }
                //    else{
                //     echo 'your password is incorrect, please try with correct credentials';
                //    }


                // else{
                //     echo '<br><b>your username does not exist, please try with correct credentials or reset your passowrd';

                // }
            } else {

                // echo "<br> please try with valid username and password with valid legth<br>";
                if ($db->SignupUser($conn, $username, $password, 'admin')) {

                } else {

                }

            }
        } else {
            echo "<br>the database file might be deleted, plase try to register with new one and try again later";
        }
    }
}

?>