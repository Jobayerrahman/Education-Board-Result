<html>
    <head>
        <title>STUDENT RESULT</title>
        <link rel="stylesheet" href="CSS/style.css">
	            <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>

              <script>
                $('input').focus(function(){
                     $(this).css("border-color", "blue");
                });
                $('input').blur(function(){
                     $(this).css("border-color", "#ccc");
                });
              </script>
    </head>
    <body class="body">
        <form class="form">
            <div class="div">
            
                <h2>STUDERNT RESULT</h2>
                    <br>
                            <label>EXAMINATION: </label>
                            <select name="exam">
                                <option value="Select">-Select One-</option>
                                <option value="HSC">HSC</option>
                                <option value="SSC">SSC</option>
                                <option value="JSC">JSC</option>
                                <option value="PSC">PSC</option>
                            </select>
                    <br>
                            <label>YEAR: </label>
                            <select name="year">
                                <option value="Select">-Select One-</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                            </select>
                    <br>
                            <label>BOARD: </label>
                            <select name="board">
                                <option value="Select">-Select One-</option>
                                <option value="DHAKA">DHAKA</option>
                                <option value="RAJSHAHI">RAJSHAHI</option>
                                <option value="SYLHET">SYLHET</option>
                                <option value="KHULNA">KHULNA</option>
                                <option value="DINAJPUR">DINAJPUR</option>
                                <option value="JOSSORE">JOSSORE</option>
                                <option value="COMILLA">COMILLA</option>
                                <option value="CHITTAGONG">CHITTAGONG</option>
                            </select>
					<br>
                        <label>ROLL NUMBER:</label>
                    <br>
                        <input type="text" name="roll" placeholder="Enter your Roll Number"> 
                    <br>
                        <label>REGISTRATION NUMBER:</label>
                    <br>
                        <input type="text" name="registration" placeholder="Enter your Registration Number"> 
                    <br>	
                        <input type="submit" name="submit" value="SEARCH RESULT"> 
                    <br>
         
				</div>
            <br>
            </fieldset>
        </form>
    </body>
</html>
