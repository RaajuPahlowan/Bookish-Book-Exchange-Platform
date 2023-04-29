<?php
class db
{
    function Connect()
    {
        $host = 'localhost';
        $user = 'root';
        $pass = 'root';
        $db = 'bookish';
        $conn = new mysqli($host, $user, $pass, $db);
        return $conn;

    }
    function Disconnect($conn)
    {
        $conn->close();
    }


    function AuthUser($conn, $userName, $password)
    {
        $query = "select username from activeDirectory where " .
            "username='$userName' and password='$password'";

        $res = $conn->query($query);
        if ($res->num_rows == 1) {
            return true;
        } else {
            return false;
        }
    }

    function SignupUser($conn, $userName, $password, $role)
    {
        $query = "insert into activeDirectory (userName,password,role)" .
            "values ('$userName','$password','$role')";
        return $conn->query($query);
    }


    function GetUserDataByID($conn, $id)
    {
        $query = "select * from usersData where userID='$id'";
        return $conn->query($query);

    }


    function CheckUser($conn, $table, $username, $password)
    {
        $result = $conn->query("SELECT * FROM " . $table . " WHERE username='" . $username . "' AND password='" . $password . "'");
        return $result;
    }


    function ShowAll($conn, $table)
    {
        $result = $conn->query("SELECT * FROM  $table");
        return $result;
    }
    function SearchByName($conn, $name)
    {
        $query = "select * from usersData where firstName='$name'";
        return $conn->query($query);
    }
    function RestoreDataFromTable($conn, $tableName)
   
    

}
?>

