<?php 
    require_once('includes/db6.php');

    $sql = "SELECT * FROM upload";
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
                             <span class="nt-title"> <h4>added seller:<?php echo $note['username']; ?><h4>
                   </span>
                            <div class="nt-links">
                                <a class="nt-link" href=<?php echo "delete2.php?id=" . $note['id']; ?>>delete userinfo</a>
                            </div>                 
                        </div>
                                     
<div class="nt-content">
                              

                     <h3>email of person:<?php echo $note['email'];?></h3>
                     <h3>mobileno:<?php echo $note['mobileno'];?></h3>
                    <h3>added imagename:<?php echo $note['imgname'];?></h3>
                    
                    
</div>
                    

                    </div>
                         <?php }
                         mysqli_free_result($notes);
                         ?>

                            

                     
                </div>
                    </div> 


                    </body>
</html>
