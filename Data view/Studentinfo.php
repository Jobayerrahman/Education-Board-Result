<?php
session_start();

include_once dirname(__FILE__) . "\../autoload.php";
use Apps\Libs\Students\Student;
$Student = new Student;
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){?>

<html>
    <head>
        <title>Admin Information</title>
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
                            <th>EMAIL</th>
                            <th>ROLL NUMBER</th>
                            <th>REGISTRATION NUMBER</th>
                            <th>EXMINATION TYPE</th>
                            <th>GROUP</th>
                            <th>CELL</th>
                            <th>ACTION</th>
                        </tr>
        <?php
            $data = $Student-> viewdata();
            while ($single_data = $data -> fetch_assoc()) :
        ?>
                        <tr>
                            <td><?php echo $single_data['name']; ?></td>
                            <td><?php echo $single_data['email']; ?></td>
                            <td><?php echo $single_data['roll_number']; ?></td>
                            <td><?php echo $single_data['reg_number']; ?></td>
                            <td><?php echo $single_data['exam_level']; ?></td>
                            <td><?php echo $single_data['group_name']; ?></td>
                            <td><?php echo $single_data['cell']; ?></td>
                            <td><button class="btn"><a href="../Data edit/editstudent.php?stuid=<?php echo $single_data['stu_serial_num'];?>">EDIT</a></button> <button class="btn">
                            <a href="../Data delete/infodelete.php?stuid=<?php echo $single_data['stu_serial_num'];?>">DLELTE</a></button></td>
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