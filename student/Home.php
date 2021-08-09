<?php
include"connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pustakshala</title>
    <link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css?v=<?php echo time();?>">
    <style>

    </style>
</head>

<body>
    <div class="sabseupr">100% Quality Guaranteed</div>
    <div class="navbar">
        <div class="left divedit">
            <img src="img\logo.png" alt="Pustakalay">
            <h3>Pustakshala</h3>
        </div>
        <div class="right divedit">
            <input type="text" placeholder="Search Books">
            <button type="button" id="gobtn">Go</button>
            <!-- <button type="button" id="loginbtn">Login or Signup</button> -->
            <?php
                if(isset($_SESSION['login_user']))
                { ?>
                    <div style="display: inline;">
                    <?php
                    echo"Welcome: ".$_SESSION['login_user'];
                    ?>
                    </div>
                    <a href="logout.php" class="login">Logout</a>
                <?php
                }
                else
                { ?>
                    <a href="student_login.php" class="login">(Login or Sign up)</a>
                <?php
                }
            ?>
        </div>
        <div class="mid divedit">

            <ul class="nav-ul">
                <a href="Home.php">
                    <li class="naviteam">Home</li>
                </a>
                <a href="books.php">
                    <li class="naviteam">Books</li>
                </a>
                <a href="registration.php">
                    <li class="naviteam">Registration</li>
                </a>
                <a href="feedback.php">
                    <li class="naviteam">Feedback</li>
                </a>
            </ul>
        </div>
    </div>
    <div class="div2">
        <div class="div2content">
            <h1>welcome to Pustakshala</h1>
            <hr>
            <p>Explore Read Share and Buy books online Pustakalay.com is complete India's education portal leading
                Online E-libraries & Bookstore A great collection of biographies, science, computer, history, romance,
                health, cook books & more from your favorite writers</p>
        </div>
    </div>
    <div class="div3">
        <div class="div3-row-1">
            <div class="divcategories brdr">
                <h4>CATEGORIES</h4>
                <div class="categorie-table brdr">
                    <ul>
                        <li><a href="#">Computer & Internet</a></li>
                        <li><a href="#">Business & Economics</a></li>
                        <li><a href="#">Biographies & Memoirs</a></li>
                        <li><a href="#">Arts & Photography</a></li>
                        <li><a href="#">Science & Mathematics</a></li>
                        <li><a href="#">Technology & Engineering</a></li>
                        <li><a href="#">Fantasy & Science Fiction</a></li>
                        <li><a href="#">History & Politics</a></li>
                        <li><a href="#">Academic</a></li>
                        <li><a href="#">Architecture</a></li>
                        <li><a href="#">Music</a></li>
                        <li><a href="#">Environment & Geography</a></li>
                    </ul>
                </div>
            </div>
            <div class="divtrending brdb">
                <h4>Trending Book</h4>
                <div class="divtrending-bk-row brdy">
                    <div class="bkcrd brdb brdl">
                        <div class="bk-cover-size"><a href="#"><img src="img\(1).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">
                        <div class="bk-cover-size"><a href="#"><img src="img\(2).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">
                        <div class="bk-cover-size"><a href="#"><img src="img\(3).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">
                        <div class="bk-cover-size"><a href="#"><img src="img\(4).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">
                        <div class="bk-cover-size"><a href="#"><img src="img\(5).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">

                        <div class="bk-cover-size"><a href="#"><img src="img\(6).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="div3-row-2 brdy">
            <h4>BEST SELLERS</h4>
             <div class="bkcrd-div brdy">
                    <div class="bkcrd brdb brdl">
                        <div class="bk-cover-size"><a href="#"><img src="img\(1).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">
                        <div class="bk-cover-size"><a href="#"><img src="img\(2).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">
                        <div class="bk-cover-size"><a href="#"><img src="img\(3).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">
                        <div class="bk-cover-size"><a href="#"><img src="img\(4).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">
                        <div class="bk-cover-size"><a href="#"><img src="img\(5).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">

                        <div class="bk-cover-size"><a href="#"><img src="img\(6).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">

                        <div class="bk-cover-size"><a href="#"><img src="img\(7).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                </div>

        </div>
        <hr>
        <div class=" div-row-3 div3-row-2 brdy">
            <h4>BEST SELLERS</h4>
             <div class="bkcrd-div brdy">
                    <div class="bkcrd brdb brdl">
                        <div class="bk-cover-size"><a href="#"><img src="img\(1).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">
                        <div class="bk-cover-size"><a href="#"><img src="img\(2).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">
                        <div class="bk-cover-size"><a href="#"><img src="img\(3).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">
                        <div class="bk-cover-size"><a href="#"><img src="img\(4).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">
                        <div class="bk-cover-size"><a href="#"><img src="img\(5).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">

                        <div class="bk-cover-size"><a href="#"><img src="img\(6).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">

                        <div class="bk-cover-size"><a href="#"><img src="img\(7).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                </div>

        </div>
        <hr>
        <div class="div-row-4 div3-row-2 brdy">
            <h4>BEST SELLERS</h4>
             <div class="bkcrd-div brdy">
                    <div class="bkcrd brdb brdl">
                        <div class="bk-cover-size"><a href="#"><img src="img\(1).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">
                        <div class="bk-cover-size"><a href="#"><img src="img\(2).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">
                        <div class="bk-cover-size"><a href="#"><img src="img\(3).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">
                        <div class="bk-cover-size"><a href="#"><img src="img\(4).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">
                        <div class="bk-cover-size"><a href="#"><img src="img\(5).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">

                        <div class="bk-cover-size"><a href="#"><img src="img\(6).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                    <div class="bkcrd brdb brdl">

                        <div class="bk-cover-size"><a href="#"><img src="img\(7).jpg" alt="Preview loading"></a></div>
                        <div class="bk-info brdb">lorem*2</div>
                        <div class="bk-price-info brdb">lorem*2</div>
                    </div>
                </div>

        </div>
    </div>
</body>

</html>