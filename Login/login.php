<?php
include_once dirname(__FILE__) . "\../autoload.php";
use Apps\Libs\Authentications\Authentication;
$Authentication = new Authentication;
?>

<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" href="../CSS/style.css">
    </head>
    <body class="body">

    <?php
            if( isset($_POST['submit']))
            {
                $user_email = $_POST['user_email'];
                $password   = $_POST['password'];

                if( empty($user_email)  || empty($password) )
                {
                    echo "Flied must not be empty!!";
                }
                else
                {
                    $Data= $Authentication -> checkUser($user_email,$password); 
                    
                }
            }
    ?>
        <form class="form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <div class="div">
                <h2>ADMIN/MEMBER LOGIN</h2>
                <br>
                    <label>USERNAME/EMAIL:</label>
                <br>
                    <input type="text" name="user_email" placeholder="Enter email">
                <br>
                    <label>PASSWORD:</label>
                <br>
                    <input type="password" name="password" placeholder="Enter password">
                <br>
                <br>
                    <input type="submit" name="submit" value="LOGIN">
                <br>
                <br>
                <a href="Registration.php">Already have an account?</a>
                <br>
            </div>
        </form>
    </body>
</html>