<?php
    namespace Apps\Libs\Authentications;
    use Apps\Libs\Database\Database;

    session_start();

    class Authentication extends Database
    {
        //Admin & Member Authentication
        public function checkUser($user_email,$password)
        {
            $sql ="SELECT * FROM admininfo WHERE email='$user_email' OR password='$password' UNION
            SELECT * FROM memberinfo WHERE email='$user_email' OR password='$password'";
            $data = parent::connection()->query($sql);

            $login_user_data = $data -> fetch_assoc();
            $user_email_count = $data -> num_rows;

            if($user_email_count == 1){
                if(password_verify($password , $login_user_data['password']))
                {
                    $_SESSION['valid']="yes";
                    $_SESSION['user_name'] = $login_user_data['name'];
                    $_SESSION['id'] = $login_user_data['serial_number'];
                    $flag = 1;
                    if($flag == 1){
                        header ("location: Memberprofile.php");
                    }
                    else
                    {
                        header ("location: ../index.php");
                    }
                }
                else{
                    echo "PASSWORD INCORRECT";
                }
            }
            else{
                echo "USER EMAIL DOESN'T EXIST";
            }
        }
    }
?>