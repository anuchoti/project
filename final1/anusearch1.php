<?php 

    require_once('includes/db4.php');
    require_once('includes/functions.php');

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $cost = prep_input($_POST['cost']);
        $sql = "INSERT INTO search11 (cost) VALUES ('";
        $sql .= $cost. "')";


if($cost>5000000 || $cost<100000){
            echo "ENTER AMOUNT RANGE IN 100000 TO 5000000";
            }
else
{

 if (mysqli_query($conn, $sql)){   
header("Location:index.html");


                    
        
          }
    }
}

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8"/>
<meta name="author" content="ANUSHA"/>
<meta name="description" content="SELECTION HOUSE"/>
<meta name="keywords" content="GIVE YOUR KEYWORDS FOR"/>
<title>ANU-HOUSE</title>
<link rel="stylesheet" href="styles/style.css">
    
</head>
<body>
<header class="header">
<div class="wrapper">
<h1>HOUSE RENTAL SYSTEM</h1>
</div>

</header>
<nav class="menu">
<div class="wrapper">
<ul>
<a href="anuiindex.html"><li>HOME</li></a>


</ul>
</div>

</nav>
<div class="main" >
<div class="wrapper">
<div class="book-house">
<div class="booking-detils">
<center><h3>enter details to search</h3>
<h3>ENTER AMOUNT RANGE BETWEEN 1,00,000 TO 5,00,000</h3>

<form action="anusearch1.php" method="post">    
<span class="search1">search</span>
<input type="number" name="cost" placeholder="enter the cost in given range u want "/><center><br/>
<center><input type="submit" name="submit" placeholder="SEND"/>
<input type="reset" name="reset" placeholder="RESET"/></center>
</form>
</div>
</div>
</div>
</div>
</body>
</html>
