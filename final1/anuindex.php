<?php 
    require_once('includes/db.php');

    $sql = "SELECT * FROM notes";
    $notes = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>HOUSE MANAGEMENT SYSTEM</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <header> 
            HOUSE MANAGEMENT SYSTEM
        </header>
        <div>
                <div>


                    <a class="nav-link" href="anuiindex.html">HOME</a>
<center><h1>new user:<a class="nt-link" href="new.php">register</a></h1></center>
                            

                     
                </div>
                    </div> 
<center><img src="images/new.jpg" /><br/></center>

    </body>
</html>
