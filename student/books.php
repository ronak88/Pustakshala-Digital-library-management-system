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
    <div class="bk_table_div">
        <div id="heading"><h1>List of Books</h1></div>
        <div class="table_div">
            <?php

                if(isset($_POST['submit']))
                {
                    $q=mysqli_query($db,"SELECT*from books where name like'%$_POST[search]%'");
                    if(mysqli_num_rows($q)==0)
                    {
                        echo"Sorry ! NO book found. Try searching again.";
                    }
                    else
                    {
                        echo"<table class='bk_table'>";
                        echo" <tr class='tr_head'>";
                            echo"<th>"; echo"Book ID"; echo"</th>";               
                            echo"<th>"; echo"Title"; echo"</th>";               
                            echo"<th>"; echo"Authors"; echo"</th>";               
                            echo"<th>"; echo"Edition"; echo"</th>";               
                            echo"<th>"; echo"Status"; echo"</th>";               
                            echo"<th>"; echo"Quantity"; echo"</th>";               
                            echo"<th>"; echo"Department"; echo"</th>";
                        echo"</tr>";
                        while($row=mysqli_fetch_assoc($q))
                        {
                            echo"<tr>";
                                echo"<td>"; echo $row['bid'];  echo"</td>"; 
                                echo"<td>"; echo $row['name'];  echo"</td>"; 
                                echo"<td>"; echo $row['authors'];  echo"</td>"; 
                                echo"<td>"; echo $row['edition'];  echo"</td>"; 
                                echo"<td>"; echo $row['status'];  echo"</td>"; 
                                echo"<td>"; echo $row['quantity'];  echo"</td>"; 
                                echo"<td>"; echo $row['department'];  echo"</td>"; 
                            echo"</tr>";
                            
                        }    
                        echo"</table>"; 
                    }

                }
                else
                {
                    $res=mysqli_query($db,"SELECT * FROM`books`;");
                    echo"<table class='bk_table'>";
                    echo" <tr class='tr_head'>";
                        echo"<th>"; echo"Book ID"; echo"</th>";               
                        echo"<th>"; echo"Title"; echo"</th>";               
                        echo"<th>"; echo"Authors"; echo"</th>";               
                        echo"<th>"; echo"Edition"; echo"</th>";               
                        echo"<th>"; echo"Status"; echo"</th>";               
                        echo"<th>"; echo"Quantity"; echo"</th>";               
                        echo"<th>"; echo"Department"; echo"</th>";
                    echo"</tr>";
                    while($row=mysqli_fetch_assoc($res))
                    {
                        echo"<tr>";
                            echo"<td>"; echo $row['bid'];  echo"</td>"; 
                            echo"<td>"; echo $row['name'];  echo"</td>"; 
                            echo"<td>"; echo $row['authors'];  echo"</td>"; 
                            echo"<td>"; echo $row['edition'];  echo"</td>"; 
                            echo"<td>"; echo $row['status'];  echo"</td>"; 
                            echo"<td>"; echo $row['quantity'];  echo"</td>"; 
                            echo"<td>"; echo $row['department'];  echo"</td>"; 
                        echo"</tr>";
                        
                    }    
                    echo"</table>";
                }
               
            ?>
        </div>
    </div>
    <div>
        <form action="" method="POST" name="form1">
        <input style="padding: 10px 10px;display: block;width: 19%;margin: auto;" type="text" placeholder="Book ID" name="bid">
        <button type="submit" name="submit1" id="gobtn" style="padding: 10px 10px;display: block;width: 5%;margin: 10px auto;">Request</button>
    </div>
    <?php
    if(isset($_POST['submit1']))
    {
        if(isset($_SESSION['login_user']))
        {
            mysqli_query($db,"INSERT INTO `issue_bk`  Values ('$_SESSION[login_user]','$_POST[bid]','','','');");
            ?>
                <script type="text/javascript">
                alert("request successful");
                window.location="request.php"
                </script>
            <?php
        }
        else
        {
            ?>
                <script type="text/javascript">
                alert("Invalid request or login first");
                </script>
            <?php
        }
    }
    ?>
    </form>
</body>
</html>