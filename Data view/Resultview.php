<?php
session_start();

include_once dirname(__FILE__) . "\../autoload.php";
use Apps\Libs\Students\Result;
$Result = new Result;
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){?>

<html>
    <head>
        <title>Student Result</title>
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="../CSS/view.css">
        <style>
            .btn a{
                text-decoration: none;
            }
        </style>
    </head>
    <body class="body">
    <form class="#">
            <div class="div">
                    <table id="result">
                        <tr>
                            <th>NAME</th>
                            <th>ROLL NUMBER</th>
                            <th>REGISTRATION NUMBER</th>
                            <th>Bangla</th>
                            <th>English</th>
                            <th>RELIGION</th>
                            <th>MATH</th>
                            <th>SOCAL SCIENCE</th>
                            <th>GENERAL SCIENCE</th>
                            <th>ACTION</th>
                        </tr>
        <?php
            $data = $Result-> viewdata();
            while ($single_data = $data -> fetch_assoc()) :
        ?>
                        <tr>
                            <td><?php echo $single_data['name']; ?></td>
                            <td><?php echo $single_data['roll_number']; ?></td>
                            <td><?php echo $single_data['reg_number']; ?></td>
                            <td><?php echo $single_data['bangla']; ?></td>
                            <td><?php echo $single_data['english']; ?></td>
                            <td><?php echo $single_data['religion']; ?></td>
                            <td><?php echo $single_data['math']; ?></td>
                            <td><?php echo $single_data['soscience']; ?></td>
                            <td><?php echo $single_data['gscience']; ?></td>
                            <td>
                            <button class="btn">
                            <a href="../Data edit/editresult.php?stuid=<?php echo $single_data['res_serial_id'];?>">EDIT</a>
                            </button> 
                            <button class="btn">
                            <a href="../Data delete/resultdelete.php?stuid=<?php echo $single_data['res_serial_id'];?>">DLELTE</a>
                            </button></td>
                        </tr>
                        <?php endwhile; ?>
                    </table>
                    <br>
            </div>
        </form>
    </body>
</html>
<?php
}
else{
    header("Location:logout.php");
}
?>