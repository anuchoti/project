<?php 

    require_once('includes/db3.php');
    require_once('includes/functions.php');

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $place = prep_input($_POST['place']);
        $sql = "INSERT INTO search (place) VALUES ('";
        $sql .= $place. "')";


if($place!="HYD" &&  $place!="KODAD" && $place!="kodad" && $place!="KDD" && $place!="HYDERABAD" && $place!="hyd" ){
            echo " HOMES ARE AVAILABLE  IN HYD AND KODAD ";
            }
else
{
if($place=="HYD" || $place=="hyd" || $place=="HYDERABAD" ){
 if (mysqli_query($conn, $sql)){   
header("Location:indexhyd.php");


                    
        
          }
    }
if($place=="KODAD" || $place=="KDD"||$place=="kdd"){
 if (mysqli_query($conn, $sql)){   
header("Location:indexkdd.php");


                    
        
          }
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
<title>Home management</title>
<link rel="stylesheet" href="styles/style.css">
    
</head>
<body bgcolor="lightgreen">
<header class="header">
<div class="wrapper">
<center><h1>HOME MANAGEMENT SYSTEM</h1></center>
</div>

</header>
<nav class="menu">
<div class="wrapper">
<ul>
<a href="http://localhost:8080/final1/index.html"><li>HOME</li></a>


</ul>
</div>

</nav>
<div class="main" >
<div class="wrapper">
<div class="book-house">
<div class="booking-detils">
<center><h3>enter details to search</h3>

<form action="searchanu.php" method="post">    
<span class="search">search</span>
<input type="text" name="place" placeholder="enter place HYD or KODAD "/><center><br/>

<center><input type="submit" name="submit" placeholder="SEND"/>
<input type="reset" name="reset" placeholder="RESET"/></center><br>

</form>
</div>
</div>
</div>
</div>
</body>
</html>
