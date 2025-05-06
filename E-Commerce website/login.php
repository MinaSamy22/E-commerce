<?php
 require_once("partials/general.php");
 require_once("partials/navv.php");
 if (checkIsLogin()) {
	header ("Location: index.php");
 } ?> 
 


<html>
    <body>
        <head><title>login </title>
            <link rel="stylesheet"href="login.css"/>
        </head>
        <form action="actions/login.php" method="post">
			 
    

		<label>Email</label> <br>
		<br> <input type="email" placeholder=" Enter your Email" name="email" required><br>


		<label > Password </label><br>
		<br> <input type="password" placeholder=" Enter the password" name="password"required ><br><br>

	 if you dont have account <a href="registar.php">registar</a> <br><br>
		<input type="submit" value="login" name="submit" > </button>


</form>
          
          
    </body>
</html>