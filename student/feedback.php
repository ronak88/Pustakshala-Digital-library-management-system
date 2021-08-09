<?php
include "connection.php";
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
    <link rel="stylesheet" href="feedback.css?v=<?php echo time(); ?>">
    <style></style>
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
        <div class="bg_div_clr"></div>
        <div class="div2content">
            <h1>Feedbacks</h1>
            <form action="" class="feedback_input" method="POST">
                <input type="text" name="comment" placeholder="Write something..." required style="display: block;width: 50%;height: 60px;padding: 0px 30px;margin: 0px 0px;margin: auto;border-radius: 10px;">
                <input type="submit" name="submit" value="Submit" style="width:12%;margin: 13px auto;padding: 12px 0px;display: block;border-radius: 24px;font-size: 14px;font-weight: bold;">
            </form>
            <hr style="height: 5px;background: white;width: 78%;margin: auto;margin-top: 59px;margin-bottom: 0px;border-radius: 20px;">
            <div class="feedback_preview scroll">
                <?php
                if (isset($_POST['submit'])) {
                    $sql = "INSERT INTO`feedback` VALUES('','$_POST[comment]');";
                    if (mysqli_query($db, $sql)) {
                        $q = "SELECT * FROM `feedback`ORDER BY `feedback`.`id`  DESC";
                        $res = mysqli_query($db, $q);
                        echo "<table class='feedback_tbl'>";
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo "<tr>";
                            echo "<td>";
                            echo $row['feedbacks'];
                            echo "</td>";
                            echo "</tr>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>