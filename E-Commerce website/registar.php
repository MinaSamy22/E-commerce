<?php 
 require_once("partials/general.php");
 require_once("partials/navv.php"); 
 if (checkIsLogin()) {
	header("Location: index.php");
} ?> 

<html>
    <body>
        <head>
            <link rel="stylesheet"href="registar.css"/>
        </head>
        <form action="actions/registar.php" method="post" enctype="multipart/form-data">
			 <!--enctype 34an 3aml t7t file inbut-->
        
		<label >Name</label>
		<input type="text" placeholder=" Enter your Name" name="name" required >

		<label>Email</label>
		<input type="email" placeholder=" Enter your Email" name="email" required>

        <label>Age</label>
		<input type="text" placeholder="Enter your Age" name="age" required>

		<label > Password </label>
		<input type="password" placeholder=" Enter the password" name="password"required >

		<label >Confirm Password</label>
		<input type="password" placeholder="confirm the password" name="confirmPassword"required >


		<input type="submit" value="Register" name="submit" > </button>


</form>
          
          
    </body>
</html>