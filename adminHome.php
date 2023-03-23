<?php
    session_start();
    if(isset($_COOKIE['flag'])){

?>
        
        <!DOCTYPE html>
                <html>
                <head>
                    <title>Bookish</title>
                </head>
                <body>
        

        
                    <header>
                        <h1>Bookish</h1>
                        <h3>Looking for a new book to read? Want to share a book you've already read with someone else? Our book exchange platform is here to help.</h3>
                        <hr>
                        <nav>
                            <ul>
                                <li><a href="adminHome.php">Home</a></li>
                                <li><a href="adminOverview.php">Overview</a></li>
                                <li><a href="adminOrderDashboard.php">Order Dashboard</a></li>
                                <li><a href="#">Add Books</a></li>
                                <li><a href="profile.php">Profile</a></li>
                                <li><a href="profileSettings.php">Profile Settings</a></li>
                                <li><a href="#">Manage Moderators and Users</a></li>
                                <li><a href="notification.php">Notifications</a></li>
                                <li><a href="#">Transactions</a></li>
                                <li><a href="logout.php">Logout</a></li>
        
                                
                            </ul>
                        </nav>
                    </header>

                    <hr>
                    <main> 
                            <form>
                                  <label for="search-input">Search:</label>
                                  <input type="text" id="search-input" name="search" placeholder="Members, Moderators or Books">
                                  <button type="submit">Search</button>
                                </form>

                                <hr>
                            
                        <h3>Pinned Books</h3>
                        <ul>
                            <li>
                                <img src="book1.jpg" width="150px" alt="Book 1">
                                <h4>Book 1 Title</h4>
                                <p>Author: Book Author</p>
                                <p>Genre: Romance</p>
                                <p>Condition: Fair</p>
                                <p>Book 1 Description</p>
                                <button>Add to My Books</button>
                            </li> <br>
                            <li>
                                <img src="book2.jpg" width="150px" alt="Book 2">
                                <h4>Book 2 Title</h4>
                                <p>Author: Book Author</p>
                                <p>Genre: Romance</p>
                                <p>Condition: Fair</p>
                                <p>Book 2 Description</p>
                                <button>Add to My Books</button>
                            </li> <br>
                            <li>
                                <img src="book3.jpg" width="150px" alt="Book 3">
                                <h4>Book 3 Title</h4>
                                <p>Author: Book Author</p>
                                <p>Genre: Romance</p>
                                <p>Condition: Fair</p>
                                <p>Book 3 Description</p>
                                <button>Add to My Books</button>
                            </li>
                                      <br>
                                      <li>
                                          <img src="book1.jpg" width="150px" alt="Book 1">
                                          <h4>Book 1 Title</h4>
                                          <p>Author: Book Author</p>
                                          <p>Genre: Romance</p>
                                          <p>Condition: Fair</p>
                                          <p>Book 1 Description</p>
                                          <button>Add to My Books</button>
                                      </li><br>
                                      <li>
                                          <img src="book2.jpg" width="150px" alt="Book 2">
                                          <h4>Book 2 Title</h4>
                                          <p>Author: Book Author</p>
                                          <p>Genre: Romance</p>
                                          <p>Condition: Fair</p>
                                          <p>Book 2 Description</p>
                                          <button>Add to My Books</button>
                                      </li><br>
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

<hr>
<h1 align="center"> Bookish Overview </h1>
<table border="1" align="center" width="800">
  <tr>
    <th>Overview</th>
    <th>Numbers</th>
  </tr>
  <tr>
    <td>Total Users</td>
    <td>2878</td>
  </tr>
  <tr>
    <td>Total Books Exchanged</td>
    <td>34454</td>
  </tr>
  <tr>
    <td>Total Reviews</td>
    <td>998</td>
  </tr>
  <tr>
    <td>Total Revenue</td>
    <td>46573</td>
  </tr>
  <tr>
    <td>Moderators</td>
    <td>3</td>
  </tr>
  <tr>
    <td>Total Books Added</td>
    <td>10873</td>
  </tr>
  
</table><hr>


                                      <a href="logout.php">logout</a>
                    <footer>
                        <p>&copy; 2023 Bookish. All rights reserved.</p>
                    </footer>
                </body>
                </html>


<?php
    }else{
        header('location: login.php');
    }
?>



