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
                    <a href="admin_login.php" class="login">(Login or Sign up)</a>
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
    <div>
        <h2 style=' margin: 55px auto ;width: 20%;font-size: 44px;'>Request of book</h2>
    </div>
    <?php
    if(isset($_SESSION['login_user']))
    {
            $sql="SELECT student.username,roll,books.bid,name,authors,edition,status FROM student inner join issue_bk ON student.username=issue_bk.username inner join books ON issue_bk.bid=books.bid WHERE issue_bk.approve=''";
            $res=mysqli_query($db,$sql);
            if(mysqli_num_rows($res)==0)
            {
                echo"<h2 style=' margin: 55px auto ;width: 38%;font-size: 44px;' >";
                echo"There is no panding request !";
                echo"</h2>";
            }
            else
            {
                echo"<table class='bk_table'>";
                        echo" <tr class='tr_head'>";
                            echo"<th>"; echo"Student Username"; echo"</th>";               
                            echo"<th>"; echo"Roll"; echo"</th>";               
                            echo"<th>"; echo"Book ID"; echo"</th>";               
                            echo"<th>"; echo"Book Name"; echo"</th>";               
                            echo"<th>"; echo"Authors Name"; echo"</th>";               
                            echo"<th>"; echo"Edition"; echo"</th>";               
                            echo"<th>"; echo"Status"; echo"</th>";               
                    
                        echo"</tr>";
                        while($row=mysqli_fetch_assoc($res))
                        {
                            echo"<tr>";
                                echo"<td>"; echo $row['username'];  echo"</td>"; 
                                echo"<td>"; echo $row['roll'];  echo"</td>"; 
                                echo"<td>"; echo $row['bid'];  echo"</td>"; 
                                echo"<td>"; echo $row['name'];  echo"</td>"; 
                                echo"<td>"; echo $row['authors'];  echo"</td>"; 
                                echo"<td>"; echo $row['edition'];  echo"</td>"; 
                                echo"<td>"; echo $row['status'];  echo"</td>"; 
                                
                            echo"</tr>";
                            
                        }    
                echo"</table>"; 
            }
            ?>
            <div class="">
                <form action="" method="POST" name="form1">
                     <input type="text" name="username" class="" placeholder="Username" style="display: block;margin: 20px auto;padding: 10px 34px;border-radius: 28px;">
                    <input type="text" name="bid" placeholder="Book ID" style="display: block;margin: 20px auto;padding: 10px 34px;    border-radius: 28px;">
                    <button name="submit1" type="submit" style="display: block;margin: auto;font-size: 17px;padding: 5px 12px;        border-radius: 10px;">Submit</button>
                </form>
            </div>
            <?php

            if(isset($_POST['submit1']))
            {
                $_SESSION['name']=$_POST['username'];
                $_SESSION['bid']=$_POST['bid'];
                ?>
                <script type="text/javascript">
                window.location="approve.php"
                </script>
                <?php
            }
    }
    ?>

            


</body>
</html>