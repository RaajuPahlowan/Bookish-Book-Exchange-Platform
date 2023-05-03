


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/overview.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Order Dashboard</title>
</head>


<body>
<div class="side-menu">
    <div class="brand-name">
        <img src="../asset/image/logo.png">
    </div>
    <br>
    <br>
    <ul>
        <li><a href="../view/homepage.php">Home</a></li>
        <li><a href="../view/overview.php">Overview</a></li>
        <li><a href="../view/dashboard.php">Order Dashboard</a></li>
        <li><a href="#logout">Logout</a></li>
    </ul>
</div>

<div class="container">
    <div class="header">
        <div class="nav">
            <div class="search">
                <input type="text" placeholder="Search..">
                <button type="submit"><img src="../asset/image/search.png" alt=""></button>
            </div>
            <div class="user">
                <a href="#" class="btn">Add New</a>
                <img src="../asset/image/notification.png" alt="">
                <div class="img-case">
                    <img src="../asset/image/user.png" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="content">
        <div class="cards">
            <div class="card">
                <div class="box">
                    <h1>21</h1>
                    <h3>Total Orders</h3>
                </div>
                <div class="icon-case">
                    <img src="../asset/image/order.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <h1>18</h1>
                    <h3>Total Deliveries</h3>
                </div>
                <div class="icon-case">
                    <img src="../asset/image/delivery.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <h1>3</h1>
                    <h3>Order Pending</h3>
                </div>
                <div class="icon-case">
                    <img src="../asset/image/clock.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <h1>1291</h1>
                    <h3>Total Revenue</h3>
                </div>
                <div class="icon-case">
                    <img src="../asset/image/revenue.png" alt="">
                </div>
            </div>
        </div>



    <div class="content-2">

    <div class="recent-transactions">
        <div class="title">
            <h2>Order Chart</h2>
            <a href="#" class="btn">View All</a>
        </div>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Order ID</th>
                <th>Total Bill</th>
            </tr>
            <?php
            require('../model/db.php');
            $db = new db();
            $conn = $db->Connect();
            $res = $db->FetchTransactions($conn);
            if($res && $res->num_rows > 0)
            {
                foreach($res as $r=>$transaction)
                {
                    $name = $transaction['name'];
                    $email = $transaction['email'];
                    $orderId = $transaction['oderid'];
                    $totalBill = $transaction['totalbill'];

                    echo '<tr>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$orderId.'</td>
                            <td>'.$totalBill.'</td>
                        </tr>';
                }
            }
            else
            {
                echo '<tr><td colspan="4">No transactions found.</td></tr>';
            }
            ?>
        </table>
    </div>
</div>
    </div>

</div>

</body>
</html>