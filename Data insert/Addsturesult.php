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
    if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $roll = $_POST['roll'];
            $reg = $_POST['reg'];
            $bangla = $_POST['bangla'];
            $english = $_POST['english'];
            $religion = $_POST['religion'];
            $math = $_POST['math'];
            $soscience = $_POST['sscience'];
            $science = $_POST['science'];
            

            $roll_check = $Result -> rollCheck ($roll);
            $reg_check = $Result -> regCheck ($reg);

            if( empty($name) || empty($roll) || empty($reg) || empty($bangla) || empty($english) || empty($religion) || empty($math) || empty($soscience) || empty($science) )
            {
                echo "Field must not be empty";
            }
            else if($roll_check == false)
            {
                echo " Roll number already exists!!";
            }
            else if($reg_check == false)
            {
                echo " Registration number already exists!!";
            }
            else
            {
                $data = $Result -> Addresult($name,$roll,$reg,$bangla,$english,$religion,$math,$soscience,$science);

                if($data == true)
                {
                    header("Location: Memberprofile.php");
                }
            }
        }
    ?>
        <form class="form"  action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <div class="div">
                <h2>STUDENT RESULT</h2>
                <br>
                        <labe2l>NAME:</label>
                    <br>
                        <input type="text" name="name" placeholder="Enter student name">  
                    <br>
                        <label>ROLL NUMBER:</label>
                    <br>
                        <input type="text" name="roll" placeholder="Enter student govtment id number">
                    <br>
                        <label>REGISTRATION NUMBER:</label>
                    <br>
                        <input type="text" name="reg" placeholder="Enter student national id number">
                    <br>
                        <label>BANGLA:</label>
                    <br>
                        <input type="text" name="bangla" placeholder="Enter student bangla number">
                    <br>
                        <label>ENGLISH:</label>
                    <br>
                        <input type="text" name="english" placeholder="Enter student english number ">
                    <br>
                        <label>RELIGION:</label>
                    <br>
                        <input type="text" name="religion" placeholder="Enter student religion number">
                    <br>
                        <label>MATHEMATIC:</label>
                    <br>
						<input type="text" name="math" placeholder="Enter student mathematics number"> 
                     
                    <br>
                        <label>SOCIAL SCIENCE:</label>
                    <br>
                        <input type="text" name="sscience" placeholder="Enter student social science number">
                    <br>
                        <label>GENERAL SCIENCE:</label>
                    <br>
                        <input type="text" name="science" placeholder="Enter student general scinence number">
                    <br>
                        <input type="submit" name="submit" value="SUBMIT"> 
            </div>
        </form>
    </body>
</html>