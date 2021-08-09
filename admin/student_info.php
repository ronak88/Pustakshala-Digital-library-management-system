<?php
include"connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_info</title>
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
            <?php
                if(isset($_SESSION['login_user']))
                { ?>
                        <div>
                           <?php
                           echo"<img id='profile_pic' src='img/".$_SESSION['pic']."' style=' width: 49px; height: 50px; display: block; float: right; position: relative; top: -46px; left: 4px; border: 2px solid white; border-radius: 50%;'>";
                           echo "<div style='display:inline; position:relative; left:155px;top:12.1px;'>".$_SESSION['login_user']."</div>";
                           ?>
                        </div>
                    <div style="display: inline;position: relative;left: -58px;top: -8px;">
                         <form action="" method="POST" name="form">
                         <input type="text" placeholder="Search Student" name="search">
                        <button type="submit" name="submit">Go</button>
                    </div>
                       <a href="logout.php" class="login" style="display: inline;position: relative;top: -29px;left: 138px;">Logout</a>
                <?php
                }
                else
                { ?>
                    <input type="text" placeholder="Search Student">
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
    <div class="bk_table_div">
        <div id="heading"><h1>List of Student</h1></div>
        <div class="table_div">
            <?php

                if(isset($_POST['submit']))
                {
                    $q=mysqli_query($db,"SELECT first,last,roll,email,phone,username FROM `student` where roll like'%$_POST[search]%'");
                    if(mysqli_num_rows($q)==0)
                    {
                        echo"Sorry ! NO Student found with that username. Try searching again.";
                    }
                    else
                    {
                        echo"<table class='bk_table'>";
                        echo" <tr class='tr_head'>";
                            echo"<th>"; echo"First Name"; echo"</th>";               
                            echo"<th>"; echo"Last Name"; echo"</th>";               
                            echo"<th>"; echo"Roll No"; echo"</th>";               
                            echo"<th>"; echo"Email"; echo"</th>";               
                            echo"<th>"; echo"Phone"; echo"</th>";               
                            echo"<th>"; echo"Username"; echo"</th>";               
                            // echo"<th>"; echo"Department"; echo"</th>";
                        echo"</tr>";
                        while($row=mysqli_fetch_assoc($q))
                        {
                            echo"<tr>";
                                echo"<td>"; echo $row['first'];  echo"</td>"; 
                                echo"<td>"; echo $row['last'];  echo"</td>"; 
                                echo"<td>"; echo $row['roll'];  echo"</td>"; 
                                echo"<td>"; echo $row['email'];  echo"</td>"; 
                                echo"<td>"; echo $row['phone'];  echo"</td>"; 
                                echo"<td>"; echo $row['username'];  echo"</td>"; 
                                // echo"<td>"; echo $row['department'];  echo"</td>"; 
                            echo"</tr>";
                            
                        }    
                        echo"</table>"; 
                    }

                }
                else
                {
                    $res=mysqli_query($db,"SELECT * FROM`student`;");
                    echo"<table class='bk_table'>";
                    echo" <tr class='tr_head'>";
                    echo"<th>"; echo"First Name"; echo"</th>";               
                    echo"<th>"; echo"Last Name"; echo"</th>";               
                    echo"<th>"; echo"Roll No"; echo"</th>";               
                    echo"<th>"; echo"Email"; echo"</th>";               
                    echo"<th>"; echo"Phone"; echo"</th>";               
                    echo"<th>"; echo"Username"; echo"</th>";             
                        // echo"<th>"; echo"Department"; echo"</th>";
                    echo"</tr>";
                    while($row=mysqli_fetch_assoc($res))
                    {
                        echo"<tr>";
                        echo"<td>"; echo $row['first'];  echo"</td>"; 
                        echo"<td>"; echo $row['last'];  echo"</td>"; 
                        echo"<td>"; echo $row['roll'];  echo"</td>"; 
                        echo"<td>"; echo $row['email'];  echo"</td>"; 
                        echo"<td>"; echo $row['phone'];  echo"</td>"; 
                        echo"<td>"; echo $row['username'];  echo"</td>"; 
                            // echo"<td>"; echo $row['department'];  echo"</td>"; 
                        echo"</tr>";
                        
                    }    
                    echo"</table>";
                }
               
            ?>
        </div>
    </div>
    <div style="width: 10%;display: block;margin: 34px auto;"><a href="add_student_info.php" style="margin: auto;font-size: 19px;padding: 10px 10px;text-decoration: none;background: white;border-radius: 14px;">Add student info</a></div>
    <div>
        <input style="padding: 10px 10px;display: block;width: 19%;margin: auto;" type="text" placeholder="Roll no" name="roll">
        <button type="submit" name="submit1" id="gobtn" style="padding: 10px 10px;display: block;width: 5%;margin: 10px auto;">Delete</button>
    </div>
    <?php
      if(isset($_POST['submit1']))
      {
          if(isset($_SESSION['login_user']))
          {
                mysqli_query($db,"DELETE from `student` WHERE roll='$_POST[roll]';");
                ?>
                   <script type="text/javascript">
                   alert("Book delete successful");
                   </script>
                   <?php
          }
          else
          {
              ?>
                 <script type="text/javascript">
                 alert("Please login first");
                 </script>
              <?php
          }
      }
    ?>
</body>
</html> 