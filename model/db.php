<?php
class db
{
    function Connect()
    {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'bookish';
        $conn = new mysqli($host, $user, $pass, $db);

        return $conn;

    }
    function Disconnect($conn)
    {
        $conn->close();
    }

    function SeedBooks($conn)
    {
        $sql = "INSERT INTO books (title, author, price, bookImage)
        VALUES ('Coco Goose', 'raaju',200, 'asset/image/book_1.jpg'),
               ('Sub Letter', 'Bruce',200, 'asset/image/book_2.jpg'),
               ('Westpart', 'Banner', 200,'asset/image/book_3.jpg'),
               ('Beautifully', 'Stark', 200,'asset/image/book_4.jpg'),
               ('Clever Lands', 'Rissie', 200,'asset/image/book_5.jpg'),
               ('Francis S', 'Morty Smith', 200,'asset/image/book_6.jpg'),
               ('The Art City', 'Rick', 200,'asset/image/book_7.png'),
               ('Music', 'Gilmour', 200,'asset/image/book_8.png'),
               ('Free Fall', 'Peter Parker', 200,'asset/image/book_9.jpg'),
               ('Kichu Ekta', 'Keo Ekjon', 200,'asset/image/book_10.png'),
               ('Boring Girls', 'Sara Taylor', 200,'asset/image/book_11.jpg'),
               ('Give Thanks', 'Rick', 200,'asset/image/book_12.png'),
               ('West', 'Bannery', 200,'asset/image/book_13.png'),
               ('Veggie', 'Anna', 200,'asset/image/book_14.png'),
               ('Black History', 'Someone', 200,'asset/image/book_15.png')";

        if ($conn->query($sql)) {
            echo "Books Data seeded successfully";

        } else {
            echo "Error seeding data: " . $conn->error;
        }
    }


    function SeedReview($conn)
    {
        $sql = "INSERT INTO review (username, reviewtext, rating, userimage)
        VALUES ('Coco Goose', 'raaju',200, 'asset/image/book_1.jpg'),
               ('Sub Letter', 'Bruce',200, 'asset/image/book_2.jpg'),
               ('Westpart', 'Banner', 200,'asset/image/book_3.jpg'),
               ('Beautifully', 'Stark', 200,'asset/image/book_4.jpg'),
               ('Clever Lands', 'Rissie', 200,'asset/image/book_5.jpg'),
               ('Francis S', 'Morty Smith', 200,'asset/image/book_6.jpg'),
               ('The Art City', 'Rick', 200,'asset/image/book_7.png'),
               ('Music', 'Gilmour', 200,'asset/image/book_8.png'),
               ('Free Fall', 'Peter Parker', 200,'asset/image/book_9.jpg'),
               ('Kichu Ekta', 'Keo Ekjon', 200,'asset/image/book_10.png'),
               ('Boring Girls', 'Sara Taylor', 200,'asset/image/book_11.jpg'),
               ('Give Thanks', 'Rick', 200,'asset/image/book_12.png'),
               ('West', 'Bannery', 200,'asset/image/book_13.png'),
               ('Veggie', 'Anna', 200,'asset/image/book_14.png'),
               ('Black History', 'Someone', 200,'asset/image/book_15.png')";

        if ($conn->query($sql)) {
            echo "Books Data seeded successfully";

        } else {
            echo "Error seeding data: " . $conn->error;
        }
    }


    function AuthUser($conn, $userName, $password)
    {
        $query = "select username,role from activedirectory where " .
            "username='$userName' and password='$password'";

        $res = $conn->query($query);
        if ($res->num_rows == 1) {
            $row = $res->fetch_assoc();
            $role = $row['role'];
            return $role;
        } else {
            return false;
        }

    }

    function SignupUser($conn, $userName, $password, $role)
    {
        $query = "insert into activedirectory (userName,password,role)" .
            "values ('$userName','$password','$role')";
        return $conn->query($query);
    }


    function FetchBooks($conn)
    {
        $query = "select * from books";
        return $conn->query($query);

    }

    function FetchTransactions($conn)
    {
        $query = "select * from transaction";
        return $conn->query($query);
    }

    function FetchTotalOrders($conn)
    {
        $query = "select * from orderdata";
        return $conn->query($query);
    }

    function FetchDetails($conn)
    {
        $query = "select * from details";
        return $conn->query($query);
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


}
?>