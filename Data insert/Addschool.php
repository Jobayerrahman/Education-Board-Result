<?php    
    include_once dirname(__FILE__) . "\../autoload.php";
    use Apps\Libs\Schools\School;
    $School = new School;
?>

<html>
    <head>
        <title>Add New Institution</title>
        <link rel="stylesheet" href="../CSS/style.css">
    </head>
    <body class="body">
    <?php

    ?>
        <form class="form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <div class="div">
                <h2>NEW INSTITUTION</h2>
                <br>
                        <label>NAME:</label>
                    <br>
                        <input  type="text" name="name" placeholder="Enter your name"> 
                    <br>
						<label>EMAIL:</label>
                    <br>
                        <input  type="text" name="username" placeholder="Enter your email"> 
                    <br>
                        <label>CODE NUMBER:</label>
                    <br>
                        <input   type="text" name="code" placeholder="Enter your govtment id number">
                    <br>
                        <label>DISTRICT:</label>
                    <br>
                        <input   type="text" name="dis" placeholder="Enter your national id number">
                    <br>
                        <label>AREA:</label>
                    <br>
                        <input   type="text" name="area" placeholder="Enter your age">
                    <br>
                        <label>LOCATION:</label>
                    <br>
                        <input   type="text" name="location" placeholder="Enter your father name">
                    <br>
                        <label>PRESENT STUDENT:</label>
                    <br>
                        <input   type="text" name="pstudent" placeholder="Enter your mother name">
                    <br>
                        <label>PASSED STUDENT:</label>
                    <br>
						<input   type="text" name="address" placeholder="Enter your address"> 
                     
                    <br>
					
                        <label>INSTITUTION TYPE:</label>
                    <br>
                            <select name="Itype">
                                <option value="select one">-Select One-</option>
                                <option value="college">COLLEGE</option>
                                <option value="school">SCHOOL</option>
                                <option value="madrasha">MADRASHA</option>
                            </select>
                    <br>
                    <br>
                        <label>AUTHORITY:</label>
                    <br>
                            <select name="Atype">
                                <option value="select one">-Select One-</option>
                                <option value="govt">GOVTMENT</option>
                                <option value="private">PRIVATE</option>
                                
                            </select>
                    <br>
                        <label>PHONE NUMBER :</label>
                    <br>
                        <input   type="text" name="cell" placeholder="Enter your first phone number">
                    <br>
                        <label>MOBILE NUMBER :</label>
                    <br>
                        <input   type="text" name="cell" placeholder="Enter your second phone number">
                    <br>
                        <input type="submit" name="submit" value="SUBMIT"> 
                    <br>
            </div>
        </form>
    </body>
</html>