<?php
include('../controller/loginController.php');
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
    

        </table>
        <button type="submit" name="login">login</button>
    </form>

</body>