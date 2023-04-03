<?php
    session_start();
    if(isset($_COOKIE['flag'])){

?>
        
        <!DOCTYPE html>
                <html>
                <head>
                    <title>Bookish - Book Exchange Platform</title>
                </head>
                <body>
        

        
                    <header>
                        <h1>Bookish - Book Exchange Platform</h1>
                        <nav>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="moderatorOverview.php">Overview</a></li>
                                <li><a href="moderatorOrderDashboard.php">Order Dashboard</a></li>
                                <li><a href="#">Add Books</a></li>
                                <li><a href="profile.php">Profile</a></li>
                                <li><a href="#">Profile Settings</a></li>
                                <li><a href="#">Manage Members</a></li>
                                <li><a href="#">Notifications</a></li>
                                <li><a href="#">Transactions</a></li>
        
                                
                            </ul>
                        </nav>
                    </header>
                    <main>
        
                        <p>Looking for a new book to read? Want to share a book you've already read with someone else? Our book exchange platform is here to help.</p>
                            
                            <form>
                                  <label for="search-input">Search for a book:</label>
                                  <input type="text" id="search-input" name="search" placeholder="Title, author, or genre">
                                  <button type="submit">Search</button>
                                </form>
                            
                        <h3>Featured Books</h3>
                        <ul>
                            <li>
                                <img src="book1.jpg" width="150px" alt="Book 1">
                                <h4>Book 1 Title</h4>
                                <p>Author: Book Author</p>
                                <p>Genre: Romance</p>
                                <p>Condition: Fair</p>
                                <p>Book 1 Description</p>
                                <button>Add to My Books</button>
                            </li>
                            <li>
                                <img src="book2.jpg" width="150px" alt="Book 2">
                                <h4>Book 2 Title</h4>
                                <p>Author: Book Author</p>
                                <p>Genre: Romance</p>
                                <p>Condition: Fair</p>
                                <p>Book 2 Description</p>
                                <button>Add to My Books</button>
                            </li>
                            <li>
                                <img src="book3.jpg" width="150px" alt="Book 3">
                                <h4>Book 3 Title</h4>
                                <p>Author: Book Author</p>
                                <p>Genre: Romance</p>
                                <p>Condition: Fair</p>
                                <p>Book 3 Description</p>
                                <button>Add to My Books</button>
                            </li>
                                      
                                      <li>
                                          <img src="book1.jpg" width="150px" alt="Book 1">
                                          <h4>Book 1 Title</h4>
                                          <p>Author: Book Author</p>
                                          <p>Genre: Romance</p>
                                          <p>Condition: Fair</p>
                                          <p>Book 1 Description</p>
                                          <button>Add to My Books</button>
                                      </li>
                                      <li>
                                          <img src="book2.jpg" width="150px" alt="Book 2">
                                          <h4>Book 2 Title</h4>
                                          <p>Author: Book Author</p>
                                          <p>Genre: Romance</p>
                                          <p>Condition: Fair</p>
                                          <p>Book 2 Description</p>
                                          <button>Add to My Books</button>
                                      </li>
                                      <li>
                                          <img src="book3.jpg" width="150px" alt="Book 3">
                                          <h4>Book 3 Title</h4>
                                          <p>Author: Book Author</p>
                                          <p>Genre: Romance</p>
                                          <p>Condition: Fair</p>
                                          <p>Book 3 Description</p>
                                          <button>Add to My Books</button>
                                      </li>
                        </ul>
                    </main>
                                      <a href="../controllers/logout.php">logout</a>
                    <footer>
                        <p>&copy; 2023 Book Exchange Platform. All rights reserved.</p>
                    </footer>
                </body>
                </html>


<?php
    }else{
        header('location: login.php');
    }
?>



