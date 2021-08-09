<?php
include"connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_login</title>
    <link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="student_login.css?v=<?php echo time();?>">
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
        <div class="bg_clr"></div>
        <div class="div2content brdb">
            <h1>welcome to Pustakshala</h1>
            <hr>
            <p>Explore Read Share and Buy books online Pustakalay.com is complete India's education portal leading
                Online E-libraries & Bookstore A great collection of biographies, science, computer, history,
                romance,
                health, cook books & more from your favorite writers</p>

        </div>
        <div class="login_div brdr">
            <h1>User Login Form</h1>
            <div class="form_div">
                <form class="login_form" name="login" action="" method="post">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input style="width: 16%;padding: 4px 0px;" type="submit" name="submit" value="Login">
                    <p><a href="#">Forgot Password?</a> &nbsp &nbsp New to this website? <a
                            href="registration.php"> Signup</a></p>
                </form>
            </div>
        </div>

    </div>
    <?php
     if(isset($_POST['submit']))
     {
         $count=0;
         $res=mysqli_query($db,"SELECT * FROM `student` WHERE password ='$_POST[password]' && username='$_POST[username]';");
         $count=mysqli_num_rows($res);
         if($count==0)
         {
            ?>
            <script type="text/javascript">
              alert("The username or password doesn't match");
            </script>
             <?php
         }
         else
         {
            $_SESSION['login_user']=$_POST['username'];   
            ?>
            <script type="text/javascript">
              window.location="Home.php";
            </script>
             <?php
         }

     }
    ?>
</body>

</html>