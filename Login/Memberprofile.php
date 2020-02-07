<?php
session_start();

include_once dirname(__FILE__) . "\../autoload.php";
use Apps\Libs\Members\Member;
$Member = new Member;
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
                
                <a href="../Data insert/Addstudent.php">ADD STUDENT</a>
                <a href="../Data insert/Addsturesult.php">ADD STUDENT RESULT</a>
                </div>
            </div>
            <br>
            <br>
            <div class="dropdown">
            <button class="dropbtn">VIEW</button>
                <div class="dropdown-content">
                
                <a href="../Data view/Studentinfo.php">VIEW STUDENT</a>
                <a href="../Data view/Resultview.php">VIEW STUDENT RESULT</a>
                </div>
            </div>
            <div class="logout">
            <button class="dropbtn"><a href="logout.php">LOGOUT</a></button>
            </div>
        </div>
        <div class="right">
            <table class="infotable">
        <?php
		$data = $Member-> viewdata();
		while ($single_data = $data -> fetch_assoc()) :
		?>
                <tr>
                    <th>NAME</th>
                    <td><?php echo $single_data['name']; ?></td>
                    <th>ADDRESS</th>
                    <td><?php echo $single_data['address']; ?></td>
                </tr>
                <br>
                <tr>
                    <th>EMAIL</th>
                    <td><?php echo $single_data['email']; ?></td>
                    <th>NATIONAL ID</th>
                    <td><?php echo $single_data['n_id']; ?></td>
                </tr>
                <br>
                <tr>
                    <th>PHONE NUMBER</th>
                    <td><?php echo $single_data['cell']; ?></td>
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
                <?php endwhile; ?>
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