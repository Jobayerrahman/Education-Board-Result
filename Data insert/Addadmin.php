<?php
    //include_once dirname(__FILE__) . "/autoload.php";

    /*spl_autoload_register(function($className)
    {
        $classLink = $className . ".php";

        if(!file_exists($classLink))
        {
            return false;
        }

        include_once $className. ".php";
    });*/
    
    include_once dirname(__FILE__) . "\../autoload.php";
    use Apps\Libs\Admins\Admin;
    $Admin = new Admin;
?>

<html>
    <head>
        <title>Add New Admin</title>
        <link rel="stylesheet" href="../CSS/style.css">
    </head>
    <body class="body">
        <form class="form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">

    <?php
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $hash_pass = password_hash ($pass, PASSWORD_DEFAULT);
        $nid=$_POST['nid'];
        $gender=$_POST['gender'];
        $cell=$_POST['cell'];
        $address=$_POST['address'];

        $email_check = $Admin -> emailCheck($email);
        $nid_check = $Admin -> nidCheck ($nid);

        if( empty($name) || empty($email) || empty($pass) || empty($nid) || empty($gender) || empty($cell) || empty($address) )
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
        else if($nid_check == false)
        {
            echo " National ID number already exists!!";
        }
        else
        {
            $data = $Admin -> Addadmin($name,$email,$hash_pass,$nid,$gender,$cell,$address);

            if($data == true)
            {
                echo "New Admin is Added";
            }
        }
    }
    ?>



            <div class="div">
                <h2>NEW ADMIN</h2>
                <br>
                        <label>NAME:</label>
                    <br>
                        <input  type="text" name="name" placeholder="Enter your name"> 
                    <br>
						<label>EMAIL:</label>
                    <br>
                        <input  type="text" name="email" placeholder="Enter your email"> 
                    <br>
                        <label>PASSWORD:</label>
                    <br>
                        <input   type="password" name="password" placeholder="Enter your password">
                    <br>
                        <label>NATIONAL ID:</label>
                    <br>
                        <input   type="text" name="nid" placeholder="Enter your national id number">
                    <br>
                        <label>ADDRESS:</label>
                    <br>
						<input   type="text" name="address" placeholder="Enter your address"> 
                     
                    <br>
						<label>GENDER:</label>
                    <br>
                    <br>
						<input type="radio" name="gender" value="male" checked> Male
                        <input type="radio" name="gender" value="female"> Female
                        <input type="radio" name="gender" value="other"> Other 
                    <br>
                    <br>
                        <label>PHONE NUMBER:</label>
                    <br>
                        <input   type="text" name="cell" placeholder="Enter your phone number">
                    <br>
                    <br>
                        <input type="submit" name="submit" value="SUBMIT"> 
                    <br>
            </div>
        </form>
    </body>
</html>