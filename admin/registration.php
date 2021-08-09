<?php
include"connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="registration.css?v=<?php echo time();?>">
</head>

<body>
    <div class="sabseupr">100% Quality Guaranteed</div>
    <div class="navbar">
        <div class="left divedit">
            <img src="img\logo.png" alt="Pustakalay">
            <h3>Pustakshala</h3>
        </div>
        <div class="right divedit">
            <?php
                if(isset($_SESSION['login_user']))
                { ?>
                        <div>
                           <?php
                           echo"<img id='profile_pic' src='img/".$_SESSION['pic']."' style=' width: 49px; height: 50px; display: block; float: right; position: relative; top: -46px; left: 4px; border: 2px solid white; border-radius: 50%;'>";
                           echo "<div style='display:inline; position:relative; left:209px;top:12.1px;'>".$_SESSION['login_user']."</div>";
                           ?>
                        </div>
                    <div style="display: inline;position: relative;left: -58px;top: -8px;">
                        <input type="text" placeholder="Search Books">
                        <button type="button" id="gobtn">Go</button>
                    </div>
                       <a href="logout.php" class="login" style="display: inline;position: relative;top: -29px;left: 138px;">Logout</a>
                <?php
                }
                else
                { ?>
                    <input type="text" placeholder="Search Books">
                    <button type="button" id="gobtn">Go</button>
                    <a href="admin_login.php" class="login">(Login or Sign up)</a>
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
                <?php
                if(isset($_SESSION['login_user']))
                { ?>
                    <a href="student_info.php">
                        <li class="naviteam">Student info</li>
                     </a>
                <?php
                }
                else
                { ?>
                   <a href="registration.php">
                     <li class="naviteam">Registration</li>
                     </a>
                <?php
                }
                 ?>
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
        <div class="Registration_div brdr">
            <h1 style="font-size: 40px;">Admin Registration Form</h1>
            <div class="form_div">
                <form class="Registration_form" name="registration" action="" method="post">
                    <input type="text" name="first" placeholder="First Name" required>
                    <input type="text" name="last" placeholder="Last Name" required>
                    <input type="text" name="id" placeholder="ID" required>
                    <input type="text" name="email" placeholder="Email" required>
                    <input type="text" name="phone" placeholder="Phone No" required>
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input style="width: 18%;padding: 8px 0px;margin: 0px 0px 0px 83px;" type="submit" name="submit" value="Sing Up">
                </form>
            </div>
        </div>
        <?php 
          if(isset($_POST['submit']))
           {
               $count=0;
               $sql="SELECT username from `admin`";
               $res=mysqli_query($db,$sql);

               while($row=mysqli_fetch_assoc($res)){
                   if($row['username']==$_POST['username']){
                       $count=$count+1;
                   }
               }
               if($count==0){
               mysqli_query($db,"INSERT INTO `admin` VALUES('$_POST[first]','$_POST[last]','$_POST[id]', '$_POST[email]','$_POST[phone]','$_POST[username]','$_POST[password]','p.png');");
               ?>
               <script type="text/javascript">
               alert("Registration successful");
               </script>
                <?php 
               } 
               else {
                ?>
                <script type="text/javascript">
                alert("The username already exist");
                </script>
                 <?php
               }
            }
            
        ?>

    </div>
</body>

</html>
