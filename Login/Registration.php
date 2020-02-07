<?php
include_once dirname(__FILE__) . "\../autoload.php";
use Apps\Libs\Authentications\Register;
$Register = new Register;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MEMBER REGISTRATION</title>
        <link rel="stylesheet" href="../CSS/style.css">
        <script src="js/validation.js"  type= "text/javascript" >
        </script>
        <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
              
    </head>
        <body>

        <?php
             if(isset($_POST['submit']))
             {
                 $name=$_POST['name']; 
                 $nid=$_POST['nid'];
                 $address=$_POST['address'];
                 $email=$_POST['email'];
                 $password=$_POST['password'];
                 $hash_pass = password_hash ($password, PASSWORD_DEFAULT);
                 $conpass=$_POST['conpass'];
                 $cell=$_POST['cell'];
 
 
                 //$email_check = emailCheck($email, $con);
                 //$username_check = usernameCheck($username, $con);
 
                 
                 if(empty($name) || empty($nid) || empty($address) || empty($email) ||  empty($password) || empty($conpass) || empty($cell))
                 {
                     echo "Any fields must not be empty!";
                 }
                 /*else if($username_check == false)
                 {
                     echo "THIS USERNAME ALREADY EXIST";
                 }
                 else if($email_check == false)
                 {
                     echo "THIS EMAIL ALREADY REGISTRATED";
                 }*/
                 else
                 {
                    $Data= $Register-> register($name,$nid,$address,$email,$hash_pass,$cell);
                 }
            }

        ?>
            <form class="form"  name="myForm" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" onsubmit = "return(validate());">
                <div class="div">
                    <h2>MEMBER REGISTRATION</h2>
                    <br>
                        <div>
                                    <label>NAME:</label>
                                <br>
                                    <input type="text" name="name" placeholder="Enter your name"> 
                                <br>
                                    <label>NATIONAL ID NUMBER:</label>
                                <br>
                                    <input type="text" name="nid" placeholder="Enter your National Id number"> 
                                <br>
                                    <label>ADDRESS:</label>
                                <br>
                                    <input type="text" name="address" placeholder="Enter your address"> 
                                <br>
                                    <label>EMAIL:</label>
                                <br>
                                    <input type="text" name="email" placeholder="Enter your email"> 
                                <br>
                                    <label>PASSWORD:</label>
                                <br>
                                    <input type="password" name="password" placeholder="Enter your password">
                                <br>
                                    <label>CONFIRM PASSWORD:</label>
                                <br>
                                    <input type="password" name="conpass" placeholder="Confirm your password"> 
                                <br>
                                    <label>PHONE NUMBER:</label>
                                <br>
                                    <input type="text" name="cell" placeholder="Enter your Phone number"> 
                                <br>
                                <br>
                                    <input type="submit" name="submit" value="SUBMIT" > 
                                <br>
                                <br>
                                <a href="login.php">Already have an account?</a>
                        </div>

                        <script>
                        $('input').focus(function(){
                            $(this).css("border-color", "blue");
                        });
                        $('input').blur(function(){
                            $(this).css("border-color", "#ccc");
                        });
                        </script>
                <div>
            </form>
        </body>
</html>