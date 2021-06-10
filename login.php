<?php 
    require_once('includes/db.php');

    $sql = "SELECT * FROM notesanu";
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

<a class="nav-link" href="auth/dashboard.php">LOGOUT</a></center>

                 <?php
                         require_once('includes/db.php');
                         $query="SELECT username FROM notesanu ORDER BY username";
                         $quer_run=mysqli_query($conn,$query);
                         $row=mysqli_num_rows($quer_run);
                         echo '<center><h1>Total no of users registered:' .$row.'</h1></center>';
$query="SELECT location FROM notesanu WHERE location='HYD'";
                         $quer_run=mysqli_query($conn,$query);
                         $row2=mysqli_num_rows($quer_run);
                         echo '<center><h3>HYD Location:' .$row2.'</h3></center>';
$query3="SELECT location FROM notesanu WHERE location='KODAD'";
                         $quer_run1=mysqli_query($conn,$query3);
                         $row1=mysqli_num_rows($quer_run1);
                         echo '<center><h3><font color:green>KODAD Location</font>:' .$row1.'</h3></center>';

                     
                     ?>
                  
                    
                    
        <div>
                <div>
                      
                            
                    <?php while ($note = mysqli_fetch_assoc($notes)) { 
                                 ?>
                    <div class="note">
                        <div class="titleContainer">
                             <span class="nt-title"> <h4>added user:<?php echo $note['username']; ?> <?php echo $note['lastname'];?><h4>
                   </span>
                            <div class="nt-links">
                                <a class="nt-link" href=<?php echo "anudelete.php?id=" . $note['id']; ?>>delete userinfo</a>
                            </div>                 
                        </div>
                                     
<div class="nt-content">
                              

                    <h3>mobilenumber:<?php echo  $note['tel'];?></h3>
                     <h3>House no selsected:<?php echo $note['houseno'];?></h3>
                     <h3>House no selsected:<?php echo $note['location'];?></h3>
                    
                    
                         <h3>Mail of the person:<?php echo $note['email'];?></div></br><h3>
</div>
                    

                    </div>
                         <?php }
                         mysqli_free_result($notes);
                         ?>

                            

                     
                </div>
                    </div> 
    </body>
</html>
