<html lang="en">
    <head>
        <link rel="stylesheet"href="navv.css" />
    </head>
    <body>
        <header>
            <nav class="navbar">
                <div>
                    <img src="enactus.png" class="navlogo">
                    <h4>Enactus</h4>
                    <ul class="main-nav">
                        <li><a class="a2" href="index.php">Home</a></li>
                         <?php  if(checkIsLogin()){  ?> 
                        <li><a class="a2" href="about.php">About us</a></li>
                        <?php } ?>
                         <?php  if (checkIsLogin()){  ?>
                        <li><a class="a2" href="logout.php">logout</a></li>
                        <?php } else { ?>
                        <li><a class="a2" href="registar.php">register</a></li>
                        <li><a class="a2" href="login.php">login</a></li>
                        <?php } ?>

                    </ul>
                </div>
            </nav>
        </header>         
        </body>
</html>
