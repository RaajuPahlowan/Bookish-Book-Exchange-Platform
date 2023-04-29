<?php
include('../controller/signupController.php');
?>

<body>

    <form method="POST" action="">

        <table>
            <tr>
                <td>username</td>
                <td>
                    <input name="username" />
                </td>
            </tr>
            <tr>
                <td>password</td>
                <td>
                    <input name="password" />
                </td>
            </tr>
            <!-- <tr>
               <td>Division</td>
               <td>
                   <input  name='division'/>
               </td>
           </tr>
          
           <tr>
               <td>District</td>
               <td>
                   <input name='district'/>
               </td>
           </tr> -->

        </table>
        <button type="submit" name="signup">signup</button>
    </form>

</body>