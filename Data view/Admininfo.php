<?php
    include_once dirname(__FILE__) . "\../autoload.php";
    use Apps\Libs\Admins\Admin;
    $Admin = new Admin;
?>

<html>
    <head>
        <title>Admin Information</title>
        <link rel="stylesheet" href="../CSS/view.css">
    </head>
    <body class="body">
        <form class="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="div">
                    <table id="result">
                        <tr>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>NATIONAL ID</th>
                            <th>GENDER</th>
                            <th>CONTACT</th>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td>Ojayer Rahman</td>
                            <td>Roll number:</td>
                            <td>16-5798-1</td>
                            <td>Age:</td>
                        </tr>
                    </table>
                    <br>
                    <div class="btndiv">
                    <a href="Result.php" class="btn">Back</a>
                    </div>
            </div>
        </form>
    </body>
</html>