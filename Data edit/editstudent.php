

<html>
    <head>
        <title>Add Student Result</title>
        <link rel="stylesheet" href="../CSS/style.css">
    </head>
    <body class="body">
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