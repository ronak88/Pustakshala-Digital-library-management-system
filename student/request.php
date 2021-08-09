<?php
include"connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="books.css?v=<?php echo time();?>">
    <style></style>
</head>
<body style="background-color: green;">
<div class="sabseupr">100% Quality Guaranteed</div>
    <div class="navbar">
        <div class="left divedit">
            <img src="img\logo.png" alt="Pustakalay">
            <h3>Pustakshala</h3>
        </div>
        <div class="right divedit">
        <form action="" method="POST" name="form">
            <input type="text" placeholder="Search Books" name="search">
            <button type="submit"name="submit" >Go</button>
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
        </form>
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
    <?php

    if(isset($_SESSION['login_user']))
                {
                    $q=mysqli_query($db,"SELECT*from issue_bk where username='$_SESSION[login_user]';");
                    if(mysqli_num_rows($q)==0)
                    {
                        echo"There is no panding request";
                    }
                    else
                    {
                        echo"<table class='bk_table'>";
                        echo" <tr class='tr_head'>";
                            echo"<th>"; echo"Book ID"; echo"</th>";               
                            echo"<th>"; echo"Approve Status"; echo"</th>";               
                            echo"<th>"; echo"Issue Date"; echo"</th>";               
                            echo"<th>"; echo"Return Date"; echo"</th>";               
                    
                        echo"</tr>";
                        while($row=mysqli_fetch_assoc($q))
                        {
                            echo"<tr>";
                                echo"<td>"; echo $row['bid'];  echo"</td>"; 
                                echo"<td>"; echo $row['approve'];  echo"</td>"; 
                                echo"<td>"; echo $row['issue'];  echo"</td>"; 
                                echo"<td>"; echo $row['return'];  echo"</td>"; 
                                
                            echo"</tr>";
                            
                        }    
                        echo"</table>"; 
                    }

                }
                else
                {
                 ?>
                     <script type="text/javascript">
                     alert("Please login first");
                     </script>
                 <?php
                }
                ?>
</body>
</html>