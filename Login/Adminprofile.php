<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){?>

<!DOCTYPE html>
<html>
    <head>
    <title>Profile</title>
    <link rel="stylesheet" href="../CSS/prostyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <div class="header-title">
    <h2>EDUCATION BOARD RESULT</h2>
    </div>
        <div class="left">
            <h2>Welcome <?php echo $_SESSION['user_name'] ?></h2>
            <div class="dropdown">
            <button class="dropbtn">ADD</button>
                <div class="dropdown-content">
                <a href="../Data insert/Addadmin.php">ADD ADMIN</a>
                <a href="../Data insert/Addmember.php">ADD MEMBER</a>
                </div>
            </div>
            <br>
            <br>
            <div class="dropdown">
            <button class="dropbtn">VIEW</button>
                <div class="dropdown-content">
                <a href="../Data view/Admininfo.php">VIEW ADMIN</a>
                <a href="../Data view/Memberinfo.php">VIEW MEMBER</a>
                <a href="../Data view/Schoolinfo.php">VIEW SCHOOL</a>
                <a href="../Data view/Studentinfo.php">VIEW STUDENT</a>
                </div>
            </div>
            <div class="logout">
                <button class="dropbtn"><a href="logout.php">LOGOUT</a></button>
            </div>
        </div>
        <div class="right">
            <table class="infotable">
                <tr>
                    <th>NAME</th>
                    <td>Jobayer Rahman</td>
                    <th>GOVERMENT ID</th>
                    <td>**** **** ****</td>
                </tr>
                <br>
                <tr>
                    <th>EMAIL</th>
                    <td>Jobayer.aiub@gmail.com</td>
                    <th>NATIONAL ID</th>
                    <td>*** *** *** ***</td>
                </tr>
                <br>
                <tr>
                    <th>PHONE NUMBER</th>
                    <td>01941696685</td>
                    <th>GENDER</th>
                    <td>MALE</td>
                </tr>
                <br>
                <tr>
                    <th>POSITION</th>
                    <td>Admin</td>
                    <th>ACTION</th>
                    <td>Nothing</td>
                </tr>
            </table>
        </div>
    </div>

    </body>
</html>
<?php
}
else{
	header("Location:logout.php");
}
?>