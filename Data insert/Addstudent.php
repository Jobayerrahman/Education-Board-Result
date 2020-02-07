<?php    
    include_once dirname(__FILE__) . "\../autoload.php";
    use Apps\Libs\Students\Student;
    $Student = new Student;
?>

<html>
    <head>
        <title>Add New Student</title>
        <link rel="stylesheet" href="../CSS/style.css">
    </head>
    <body class="body">
    <?php
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $roll = $_POST['roll'];
            $reg = $_POST['reg'];
            $exam = $_POST['exam'];
            $group = $_POST['group'];
            $cell = $_POST['cell'];

            $email_check = $Student -> emailCheck($email);
            $roll_check = $Student -> rollCheck ($roll);
            $reg_check = $Student -> regCheck ($reg);

            if( empty($name) || empty($email) || empty($roll) || empty($reg) || empty($exam) || empty($cell) || empty($group) )
            {
                echo "Field must not be empty";
            }
            else if(filter_var($email, FILTER_VALIDATE_EMAIL)== false)
            {
                echo "Invalide email";
            }
            else if($email_check == false)
            {
                echo " Email Already Exist!!";
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
                $data = $Student -> AddStudent($name,$email,$roll,$reg,$exam,$cell,$group);

                if($data == true)
                {
                    header("Location: ../Login/Memberprofile.php");
                }
            }
        }
    ?>
        <form class="form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <div class="div">
                <h2>NEW STUDENT</h2>
                <br>
                        <label>NAME:</label>
                    <br>
                        <input  type="text" name="name" placeholder="Enter your name"> 
                    <br>
						<label>EMAIL:</label>
                    <br>
                        <input  type="text" name="email" placeholder="Enter your email"> 
                    <br>
                        <label>ROLL NUMBER:</label>
                    <br>
                        <input   type="text" name="roll" placeholder="Enter your govtment id number">
                    <br>
                        <label>REGISTRATION NUMBER:</label>
                    <br>
                        <input   type="text" name="reg" placeholder="Enter your national id number">
                    <br>
                        <label>EXAMINARION LEVEL:</label>
                    <br>
                            <select name="exam">
                                <option value="select one">-Select One-</option>
                                <option value="PSC">PSC</option>
                                <option value="JSC">JSC</option>
                                <option value="SSC">SSC</option>
                                <option value="HSC">HSC</option>
                            </select>
                    <br>
                        <label>GROUP:</label>
                    <br>
                            <select name="group">
                                <option value="select one">-Select One-</option>
                                <option value="science">SCIENCE</option>
                                <option value="commarce">COMMARCE</option>
                                <option value="arts">ARTS</option>
                                <option value="none">NONE</option>
                                
                            </select>
                    <br>
                        <label>PHONE NUMBER:</label>
                    <br>
                        <input   type="text" name="cell" placeholder="Enter your phone number">
                    <br>
                        <input type="submit" name="submit" value="SUBMIT"> 
            </div>
        </form>
    </body>
</html>