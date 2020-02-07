<?php    
    include_once dirname(__FILE__) . "\../autoload.php";
    use Apps\Libs\Students\Result;
    $Result = new Result;
?>

<html>
    <head>
        <title>Add Student Result</title>
        <link rel="stylesheet" href="../CSS/style.css">
    </head>
    <body class="body">
    <?php
    if(isset($_GET['stuid']))
        {
            $id = $_GET['stuid'];
            $data = $Result ->viewsingledata($id);
            
            $single_data = $data -> fetch_assoc();
        }
    ?>

    <?php
        if(isset($_POST['update']))
        {
            $student_id=$_POST['id'];
            $name=$_POST['name'];
            $roll=$_POST['roll'];
            $reg=$_POST['reg'];
            $bangla=$_POST['bangla'];
            $english=$_POST['english'];
            $religion=$_POST['religion'];
            $math=$_POST['math'];
            $soscience=$_POST['sscience'];
            $gscience=$_POST['science'];

            $value = $Result-> editresult($student_id,$name,$roll,$reg,$bangla,$english,$religion,$math,$soscience,$gscience);
            if($value == true)
            {
                header("Location: ../Data view/Resultview.php");
            }
            
        }
    ?>
        <form class="form"  action="<?php echo $_SERVER['PHP_SELF']?>?stu_id=<?php echo $id; ?>" method="POST">
            <div class="div">
                <h2>STUDENT RESULT</h2>
                <br>
                    <labe2l>STUDENT ID:</label>
                    <br>
                        <input name="id" type="text" value="<?php echo $single_data['res_serial_id'];?>">  
                    <br>
                        <labe2l>NAME:</label>
                    <br>
                        <input type="text" name="name" value="<?php echo $single_data['name'];?>">  
                    <br>
                        <label>ROLL NUMBER:</label>
                    <br>
                        <input type="text" name="roll" value="<?php echo $single_data['roll_number'];?>">
                    <br>
                        <label>REGISTRATION NUMBER:</label>
                    <br>
                        <input type="text" name="reg" value="<?php echo $single_data['reg_number'];?>">
                    <br>
                        <label>BANGLA:</label>
                    <br>
                        <input type="text" name="bangla" value="<?php echo $single_data['bangla'];?>">
                    <br>
                        <label>ENGLISH:</label>
                    <br>
                        <input type="text" name="english" value="<?php echo $single_data['english'];?>">
                    <br>
                        <label>RELIGION:</label>
                    <br>
                        <input type="text" name="religion" value="<?php echo $single_data['religion'];?>">
                    <br>
                        <label>MATHEMATIC:</label>
                    <br>
						<input type="text" name="math" value="<?php echo $single_data['math'];?>"> 
                     
                    <br>
                        <label>SOCIAL SCIENCE:</label>
                    <br>
                        <input type="text" name="sscience" value="<?php echo $single_data['soscience'];?>">
                    <br>
                        <label>GENERAL SCIENCE:</label>
                    <br>
                        <input type="text" name="science" value="<?php echo $single_data['gscience'];?>">
                    <br>
                        <input  type="submit" name="update" value="SUBMIT"> 
            </div>
        </form>
    </body>
</html>