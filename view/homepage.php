<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookish Homepage</title>
    <link rel="stylesheet" href="../asset/css/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <section>

        <nav>

            <div class="logo">
                <img src="../asset/image/logo.png">
            </div>

            <ul>
                <li><a href="../view/homepage.php">Home</a></li>
                <li><a href="../view/overview.php">Overview</a></li>
                <li><a href="../view/dashboard.php">Order Dashboard</a></li>
                <li><a href="#login">Login</a></li>
            </ul>

            <div class="social_icon">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>

        </nav>

        <div class="main">

            <div class="main_tag">
                <h1>WELCOME TO<br><span>Bookish</span></h1>

                <p>
                    Bookish is a great platform for anyone who loves to read and wants to share their passion with
                    others.
                    Whether you are looking to trade books with other avid readers, or simply looking for a community of
                    book lovers to connect with,
                    Bookish is the perfect platform for you.
                </p>
                <a href="#" class="main_btn">Exchange Books</a>

            </div>

            <div class="main_img">
                <img src="../asset/image/table1.jpeg">
            </div>

        </div>

    </section>


    <!--Books-->

    <div class="featured_boks">

        <h1>All Books</h1>

        <?php
        require('../model/db.php');
        $db = new db();
        $conn = $db->Connect();
        $res = $db->FetchBooks($conn);
        if ($res && $res->num_rows > 0) {
            echo '<div class="featured_book_box">';
            foreach ($res as $r => $book) {
                $title = $book['title'];
                $author = $book['author'];
                $price = $book['price'];
                $imageUrl = '../' . $book['bookImage'];

                echo '<div class="featured_book_card">
                <div class="featurde_book_img">
                    <img src="' . $imageUrl . '">
                </div>
                <div class="featurde_book_tag">
                    <h2>' . $title . '</h2>
                    <p class="writer">' . $author . '</p>
                    <p class="book_price">' . $price . ' BDT</p>
                    <a href="#" class="f_btn">GET IT NOW</a>
                </div>               
            </div>';
            }
            echo '</div>';
        } else {
            echo '<p>No featured books found.</p>';
        }
        ?>

    </div>








    <!--reviews-->

    <div class="reviews">
        <h1>Reviews</h1>

        <div class="review_box">

            <div class="review_card">
                <i class="fa-solid fa-quote-right"></i>
                <div class="card_top">
                    <img src="../asset/image/review_1.jpeg">
                </div>
                <div class="card">
                    <h2>Raaju</h2>
                    <p>
                        I recently purchased a book from bookish and I must say, my experience was fantastic.
                        The website was user-friendly, making it simple for me to find the book I was looking for.
                    </p>
                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

            <div class="review_card">
                <i class="fa-solid fa-quote-right"></i>
                <div class="card_top">
                    <img src="../asset/image/review_2.png">
                </div>
                <div class="card">
                    <h2>Lara Swift</h2>
                    <p>What impressed me the most about this bookshop was their prompt and efficient delivery.
                        The book arrived within a few days of my purchase, which was much faster than I expected.
                    </p>
                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

            <div class="review_card">
                <i class="fa-solid fa-quote-right"></i>
                <div class="card_top">
                    <img src="../asset/image/review_3.png">
                </div>
                <div class="card">
                    <h2>Omayer</h2>
                    <p>When I had a question about the delivery, I reached out to their customer service team and they
                        responded quickly and professionally, addressing my concerns in a timely manner.
                    </p>
                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

            <div class="review_card">
                <i class="fa-solid fa-quote-right"></i>
                <div class="card_top">
                    <img src="../asset/image/review_4.png">
                </div>
                <div class="card">
                    <h2>Zaara</h2>
                    <p>I had a great experience with bookish and would highly recommend it to others.
                        I will definitely be returning to this bookshop for future purchases.
                    </p>
                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!--About-->

    <div class="about">

        <div class="about_image">
            <img src="../asset/image/about.png">
        </div>
        <div class="about_tag">
            <h1>About Bookish</h1>
            <p>
                Bookish is an online book exchange platform that is dedicated to providing book lovers with a platform
                to trade their books with one another.
                The platform was created to help avid readers share their passion for books and to promote a culture of
                reading.
                Bookish is a community-driven platform that allows users to connect with one another and exchange books
                that they no longer need or want.
                The platform is easy to use and allows users to search for books by title, author, or genre. Once users
                find a book they are interested in,
                they can request a trade with the owner of the book.
            </p>
            <a href="#" class="about_btn">Learn More</a>
        </div>

    </div>




    <!--Footer-->

    <footer>
        <div class="footer_main">

            <div class="tag">
                <img src="../asset/image/logo.png">
                <p>
                    Bookish is an online book exchange platform that is dedicated
                    to providing book lovers with a platform to trade their books with one another.
                </p>

            </div>

            <div class="tag">
                <h1>Quick Link</h1>
                <a href="#">Home</a>
                <a href="#">Overview</a>
                <a href="#">Profile</a>
                <a href="#">Settings</a>

            </div>

            <div class="tag">
                <h1>Contact Info</h1>
                <a href="#"><i class="fa-solid fa-phone"></i>+8801648914204</a>
                <a href="#"><i class="fa-solid fa-phone"></i>+8801724123626</a>
                <a href="#"><i class="fa-solid fa-envelope"></i>bookish@gmail.com</a>

            </div>

        </div>


    </footer>






</body>

</html>