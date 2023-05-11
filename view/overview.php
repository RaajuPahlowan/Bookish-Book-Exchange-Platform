<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/overview.css">
    <link rel="stylesheet" href="../asset/css/profile.css">
    <script src="../asset/script/profile_toggle.js"></script>
    <title>Overview</title>
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
            <li>Logout</li>
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
                        <img src="../asset/image/user.png" class="user-pic" onclick="toggleMenu()">

                        <div class="sub-menu-wrap" id="subMenu">

                            <div class="sub-menu">
                                <div class="user-info">
                                    <h2>Raaju Pahlowan</h2>
                                </div>
                                <hr>
                                <a href="#" class="sub-menu-link">
                                    <p>Edit Profile</p>
                                    <span>></span>
                                </a>
                                <a href="#" class="sub-menu-link">
                                    <p>Settings</p>
                                    <span>></span>
                                </a>
                                <a href="#" class="sub-menu-link">
                                    <p>Logout</p>
                                    <span>></span>
                                </a>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>25</h1>
                        <h3>Total Members</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../asset/image/member.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>15</h1>
                        <h3>Total Books</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../asset/image/book.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>00</h1>
                        <h3>Books Exchanged</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../asset/image/exchange.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>1292</h1>
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
                        <h2>Member Details</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Age</th>
                        </tr>


                        <?php
                        require('../model/db.php');
                        $db = new db();
                        $conn = $db->Connect();
                        $res = $db->FetchDetails($conn);
                        if ($res && $res->num_rows > 0) {
                            foreach ($res as $r => $detail) {
                                $name = $detail['name'];
                                $address = $detail['address'];
                                $gender = $detail['gender'];
                                $age = $detail['age'];

                                echo '<tr>
                            <td>' . $name . '</td>
                            <td>' . $address . '</td>
                            <td>' . $gender . '</td>
                            <td>' . $age . '</td>
                        </tr>';
                            }
                        } else {
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