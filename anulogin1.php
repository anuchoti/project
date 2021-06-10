<?php 
    require_once('includes/db5.php');

    $sql = "SELECT * FROM feed";
    $notes = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>RENTAL App</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <header> 
            RENTAL App
        </header>
<a class="nav-link" href="login.php">BACK</a>

 <div>
                <div>
                      
                            
                    <?php while ($note = mysqli_fetch_assoc($notes)) { 
                                 ?>
                    <div class="note">
                        <div class="titleContainer">
                             <span class="nt-title"> <h4>added user:<?php echo $note['username']; ?><h4>
                   </span>
                            <div class="nt-links">
                                <a class="nt-link" href=<?php echo "anudelete.php?id=" . $note['id']; ?>>delete userinfo</a>
                            </div>                 
                        </div>
                                     
<div class="nt-content">
                              

                     <h3>email of person:<?php echo $note['email'];?></h3>
                     <h3>feedback:<?php echo $note['feed'];?></h3>
                    
                    
</div>
                    

                    </div>
                         <?php }
                         mysqli_free_result($notes);
                         ?>

                            

                     
                </div>
                    </div> 


                    </body>
</html>
